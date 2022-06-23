<?php

namespace Project\Repository;

use Project\Domain\Rusun;

class RusunRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Rusun $rusun): Rusun
    {
        $statement = $this->connection->prepare("INSERT INTO rusun(kode_rusun, no_ruang, lantai, keterangan) 
        VALUES (?, ?, ?, ?)");
        $statement->execute([
            $rusun->kode_rusun, $rusun->no_ruang, $rusun->lantai, $rusun->keterangan
        ]);

        return $rusun;
    }

    public function update(Rusun $rusun): Rusun
    {
        $statement = $this->connection->prepare("UPDATE rusun SET no_ruang = ?, lantai = ?, keterangan = ? 
        WHERE kode_rusun = ?");
        $statement->execute([
            $rusun->no_ruang, $rusun->lantai, $rusun->keterangan, $rusun->kode_rusun
        ]);

        return $rusun;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT kode_rusun, no_ruang, lantai, keterangan FROM rusun ORDER BY lantai ASC, no_ruang ASC");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $rusun = $statement->fetchAll();

                return $rusun;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $kode_rusun): ?Rusun
    {
        $statement = $this->connection->prepare("SELECT kode_rusun, no_ruang, lantai, keterangan FROM rusun WHERE kode_rusun = ?");
        $statement->execute([$kode_rusun]);

        try {
            if ($row = $statement->fetch()) {
                $rusun = new Rusun();
                $rusun->kode_rusun = $row['kode_rusun'];
                $rusun->no_ruang = $row['no_ruang'];
                $rusun->lantai = $row['lantai'];
                $rusun->keterangan = $row['keterangan'];

                return $rusun;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($kode_rusun)
    {
        $statement = $this->connection->prepare("DELETE FROM rusun WHERE kode_rusun = ?");

        return $statement->execute([$kode_rusun]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM rusun");
    }
}
