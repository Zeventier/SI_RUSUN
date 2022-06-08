<?php

namespace Project\Repository;

use Project\Domain\Tanggapan;

class TanggapanRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Tanggapan $tanggapan): Tanggapan
    {
        $statement = $this->connection->prepare("INSERT INTO tanggapan(id_tanggapan, waktu, tanggapan, id_keluhan) 
        VALUES (?, ?, ?, ?)");
        $statement->execute([
            $tanggapan->id_tanggapan, $tanggapan->waktu, $tanggapan->tanggapan, $tanggapan->id_keluhan
        ]);

        return $tanggapan;
    }

    public function update(Tanggapan $tanggapan): Tanggapan
    {
        $statement = $this->connection->prepare("UPDATE tanggapan SET waktu = ?, tanggapan = ?, id_keluhan = ?) 
        WHERE id_tanggapan = ?");
        $statement->execute([
            $tanggapan->waktu, $tanggapan->tanggapan, $tanggapan->id_keluhan, $tanggapan->id_tanggapan
        ]);

        return $tanggapan;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_tanggapan, waktu, tanggapan, id_keluhan FROM tanggapan");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $tanggapan = $statement->fetchAll();

                return $tanggapan;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_tanggapan): ?Tanggapan
    {
        $statement = $this->connection->prepare("SELECT id_tanggapan, waktu, tanggapan, id_keluhan FROM tanggapan WHERE id_tanggapan = ?");
        $statement->execute([$id_tanggapan]);

        try {
            if ($row = $statement->fetch()) {
                $tanggapan = new Tanggapan();
                $tanggapan->id_tanggapan = $row['id_tanggapan'];
                $tanggapan->waktu = $row['waktu'];
                $tanggapan->tanggapan = $row['tanggapan'];
                $tanggapan->id_keluhan = $row['id_keluhan'];

                return $tanggapan;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_tanggapan)
    {
        $statement = $this->connection->prepare("DELETE FROM tanggapan WHERE id_tanggapan = ?");

        return $statement->execute([$id_tanggapan]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM tanggapan");
    }
}
