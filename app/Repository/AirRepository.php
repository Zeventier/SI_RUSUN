<?php

namespace Project\Repository;

use Project\Domain\Air;

class AirRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Air $air): Air
    {
        $statement = $this->connection->prepare("INSERT INTO air(id_air, harga_awal, harga_akhir) 
        VALUES (?, ?, ?)");
        $statement->execute([
            $air->id_air, $air->harga_awal, $air->harga_akhir, $air->keterangan
        ]);

        return $air;
    }

    public function update(Air $air): Air
    {
        $statement = $this->connection->prepare("UPDATE air SET harga_awal = ?, harga_akhir = ?) 
        WHERE id_air = ?");
        $statement->execute([
            $air->harga_awal, $air->harga_akhir, $air->id_air
        ]);

        return $air;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_air, harga_awal, harga_akhir FROM air");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $air = $statement->fetchAll();

                return $air;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_air): ?Air
    {
        $statement = $this->connection->prepare("SELECT id_air, harga_awal, harga_akhir FROM air WHERE id_air = ?");
        $statement->execute([$id_air]);

        try {
            if ($row = $statement->fetch()) {
                $air = new Air();
                $air->id_air = $row['id_air'];
                $air->harga_awal = $row['harga_awal'];
                $air->harga_akhir = $row['harga_akhir'];

                return $air;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_air)
    {
        $statement = $this->connection->prepare("DELETE FROM air WHERE id_air = ?");

        return $statement->execute([$id_air]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM air");
    }
}
