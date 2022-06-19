<?php

namespace Project\Repository;

use Project\Domain\Berkas;

class BerkasRepository {
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Berkas $berkas): Berkas
    {
        $statement = $this->connection->prepare("INSERT INTO berkas(id_berkas, ktp_pmhn, ktp_psgn, kartu_kk, srt_kerja, struk_gaji, srt_nikah) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $berkas->id_berkas, $berkas->ktp_pmhn, $berkas->ktp_psgn, $berkas->kartu_kk, $berkas->srt_kerja, $berkas->struk_gaji, $berkas->srt_nikah
        ]);

        return $berkas;
    }

    public function update(Berkas $berkas): Berkas
    {
        $statement = $this->connection->prepare("UPDATE berkas SET ktp_pmhn = ?, ktp_psgn = ?, kartu_kk = ?, srt_kerja = ?, struk_gaji = ?, srt_nikah = ?) 
        WHERE id_berkas = ?");
        $statement->execute([
            $berkas->ktp_pmhn, $berkas->ktp_psgn, $berkas->kartu_kk, $berkas->srt_kerja, $berkas->struk_gaji, $berkas->srt_nikah, $berkas->id_berkas 
        ]);

        return $berkas;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_berkas, ktp_pmhn, ktp_psgn, kartu_kk, srt_kerja, struk_gaji, srt_nikah FROM berkas");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $berkas = $statement->fetchAll();

                return $berkas;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_berkas): ?Berkas
    {
        $statement = $this->connection->prepare("SELECT id_berkas, ktp_pmhn, ktp_psgn, kartu_kk, srt_kerja, struk_gaji, srt_nikah FROM berkas WHERE id_berkas = ?");
        $statement->execute([$id_berkas]);

        try {
            if ($row = $statement->fetch()) {
                $berkas = new Berkas();
                $berkas->id_berkas = $row['id_berkas'];
                $berkas->ktp_pmhn = $row['ktp_pmhn'];
                $berkas->ktp_psgn = $row['ktp_psgn'];
                $berkas->kartu_kk = $row['kartu_kk'];
                $berkas->srt_kerja = $row['srt_kerja'];
                $berkas->struk_gaji = $row['struk_gaji'];
                $berkas->srt_nikah = $row['srt_nikah'];

                return $berkas;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_berkas)
    {
        $statement = $this->connection->prepare("DELETE FROM berkas WHERE id_berkas = ?");

        return $statement->execute([$id_berkas]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM berkas");
    }
}