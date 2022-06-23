<?php

namespace Project\Repository;

use Project\Domain\Keluhan;

class KeluhanRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Keluhan $keluhan): Keluhan
    {
        $statement = $this->connection->prepare("INSERT INTO keluhan(id_keluhan, waktu, keluhan, username) 
        VALUES (?, ?, ?, ?)");
        $statement->execute([
            $keluhan->id_keluhan, $keluhan->waktu, $keluhan->keluhan, $keluhan->username
        ]);

        return $keluhan;
    }

    public function update(Keluhan $keluhan): Keluhan
    {
        $statement = $this->connection->prepare("UPDATE keluhan SET waktu = ?, keluhan = ?, username = ?) 
        WHERE id_keluhan = ?");
        $statement->execute([
            $keluhan->waktu, $keluhan->keluhan, $keluhan->username, $keluhan->id_keluhan
        ]);

        return $keluhan;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_keluhan, waktu, keluhan, username FROM keluhan");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $keluhan = $statement->fetchAll();

                return $keluhan;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_keluhan): ?Keluhan
    {
        $statement = $this->connection->prepare("SELECT id_keluhan, waktu, keluhan, username FROM keluhan WHERE id_keluhan = ?");
        $statement->execute([$id_keluhan]);

        try {
            if ($row = $statement->fetch()) {
                $keluhan = new Keluhan();
                $keluhan->id_keluhan = $row['id_keluhan'];
                $keluhan->waktu = $row['waktu'];
                $keluhan->keluhan = $row['keluhan'];
                $keluhan->username = $row['username'];

                return $keluhan;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findByMY($year, $month)
    {
        $statement = $this->connection->prepare("SELECT keluhan.id_keluhan, keluhan.waktu, keluhan.keluhan, keluhan.username, tanggapan.tanggapan, penghuni.kode_rusun FROM keluhan 
                                                    LEFT JOIN tanggapan ON keluhan.id_keluhan = tanggapan.id_keluhan
                                                    LEFT JOIN penghuni ON keluhan.username = penghuni.username
                                                    WHERE YEAR(keluhan.waktu) = ? AND MONTH(keluhan.waktu) = ? ORDER BY tanggapan.tanggapan, keluhan.waktu DESC");
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

    public function findByUsername($username)
    {
        $statement = $this->connection->prepare("SELECT keluhan.id_keluhan, keluhan.waktu, keluhan.keluhan, keluhan.username, tanggapan.tanggapan FROM keluhan 
                                                    LEFT JOIN tanggapan ON keluhan.id_keluhan = tanggapan.id_keluhan 
                                                    WHERE keluhan.username = ?");
        $statement->execute([$username]);

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

    public function delete($id_keluhan)
    {
        $statement = $this->connection->prepare("DELETE FROM keluhan WHERE id_keluhan = ?");

        return $statement->execute([$id_keluhan]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM keluhan");
    }
}
