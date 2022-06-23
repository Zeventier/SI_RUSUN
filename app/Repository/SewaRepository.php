<?php

namespace Project\Repository;

use Project\Domain\Sewa;

class SewaRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Sewa $sewa): Sewa
    {
        $statement = $this->connection->prepare("INSERT INTO sewa(id_sewa, sewa_rusun, debit_air, keterangan, deadline, username) 
        VALUES (?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $sewa->id_sewa, $sewa->sewa_rusun, $sewa->debit_air, $sewa->keterangan, $sewa->deadline, $sewa->username
        ]);

        return $sewa;
    }

    public function update(Sewa $sewa): Sewa
    {
        $statement = $this->connection->prepare("UPDATE sewa SET sewa_rusun = ?, debit_air = ?, keterangan = ?, deadline = ?, username = ? 
        WHERE id_sewa = ?");
        $statement->execute([
            $sewa->sewa_rusun, $sewa->debit_air, $sewa->keterangan, $sewa->deadline, $sewa->username, $sewa->id_sewa
        ]);

        return $sewa;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_sewa, sewa_rusun, debit_air, keterangan, deadline, username FROM sewa");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $sewa = $statement->fetchAll();

                return $sewa;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findByMY($year, $month)
    {
        $statement = $this->connection->prepare("SELECT id_sewa, sewa_rusun, debit_air, keterangan, deadline, username FROM sewa WHERE YEAR(deadline) = ? AND MONTH(deadline) = ?");
        $statement->execute([$year, $month]);

        try {
            if ($statement->rowCount() > 0) {
                $sewa = $statement->fetchAll();

                return $sewa;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_sewa): ?Sewa
    {
        $statement = $this->connection->prepare("SELECT id_sewa, sewa_rusun, debit_air, keterangan, deadline, username FROM sewa WHERE id_sewa = ?");
        $statement->execute([$id_sewa]);

        try {
            if ($row = $statement->fetch()) {
                $sewa = new Sewa();
                $sewa->id_sewa = $row['id_sewa'];
                $sewa->sewa_rusun = $row['sewa_rusun'];
                $sewa->debit_air = $row['debit_air'];
                $sewa->keterangan = $row['keterangan'];
                $sewa->deadline = $row['deadline'];
                $sewa->username = $row['username'];

                return $sewa;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findByUsername($username): ?Sewa
    {
        $statement = $this->connection->prepare("SELECT id_sewa, sewa_rusun, debit_air, keterangan, deadline, username FROM sewa WHERE username = ? ORDER BY deadline ASC");
        $statement->execute([$username]);

        try {
            if ($row = $statement->fetch()) {
                $sewa = new Sewa();
                $sewa->id_sewa = $row['id_sewa'];
                $sewa->sewa_rusun = $row['sewa_rusun'];
                $sewa->debit_air = $row['debit_air'];
                $sewa->keterangan = $row['keterangan'];
                $sewa->deadline = $row['deadline'];
                $sewa->username = $row['username'];

                return $sewa;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_sewa)
    {
        $statement = $this->connection->prepare("DELETE FROM sewa WHERE id_sewa = ?");

        return $statement->execute([$id_sewa]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM sewa");
    }
}
