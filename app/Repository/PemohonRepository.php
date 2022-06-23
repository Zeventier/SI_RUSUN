<?php

namespace Project\Repository;

use Project\Domain\Pemohon;

class PemohonRepository {
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Pemohon $pemohon): Pemohon
    {
        $statement = $this->connection->prepare("INSERT INTO pemohon(id_pemohon, nama_pemohon, notelp_pemohon, nik_pemohon, nomor_kk, 
            kerja_pemohon, gaji_pemohon, jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, kode_rusun, id_berkas) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $pemohon->id_pemohon, $pemohon->nama_pemohon, $pemohon->notelp_pemohon, $pemohon->nik_pemohon, $pemohon->nomor_kk, $pemohon->kerja_pemohon,
            $pemohon->gaji_pemohon, $pemohon->jlh_penghuni, $pemohon->nama_psgn, $pemohon->kerja_psgn, $pemohon->gaji_psgn, $pemohon->kode_rusun, 
            $pemohon->id_berkas
        ]);
        return $pemohon;
    }

    public function update(Pemohon $pemohon): Pemohon
    {
        $statement = $this->connection->prepare("UPDATE pemohon SET nama_pemohon = ?, notelp_pemohon = ?, nik_pemohon = ?, nomor_kk = ?, 
            kerja_pemohon = ?, gaji_pemohon = ?, jlh_penghuni = ?, nama_psgn = ?, kerja_psgn = ?, gaji_psgn = ? WHERE id_pemohon = ?");
        $statement->execute([
            $pemohon->nama_pemohon, $pemohon->notelp_pemohon, $pemohon->nik_pemohon, $pemohon->nomor_kk, $pemohon->kerja_pemohon,
            $pemohon->gaji_pemohon, $pemohon->jlh_penghuni, $pemohon->nama_psgn, $pemohon->kerja_psgn, $pemohon->gaji_psgn, $pemohon->id_pemohon
        ]);

        return $pemohon;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_pemohon, nama_pemohon, notelp_pemohon, nik_pemohon, nomor_kk, 
            kerja_pemohon, gaji_pemohon, jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn FROM pemohon");
        $statement->execute();

        try {
            if($statement->rowCount() > 0) {
                $pemohon = $statement->fetchAll();

                return $pemohon;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_pemohon): ?Pemohon
    {
        $statement = $this->connection->prepare("SELECT id_pemohon, nama_pemohon, notelp_pemohon, nik_pemohon, nomor_kk, 
            kerja_pemohon, gaji_pemohon, jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, kode_rusun, id_berkas FROM pemohon WHERE id_pemohon = ?");
        $statement->execute([$id_pemohon]);

        try {
            if ($row = $statement->fetch()) {
                $pemohon = new Pemohon();
                $pemohon->id_pemohon = $row['id_pemohon'];
                $pemohon->nama_pemohon = $row['nama_pemohon'];
                $pemohon->notelp_pemohon = $row['notelp_pemohon'];
                $pemohon->nik_pemohon = $row['nik_pemohon'];
                $pemohon->nomor_kk = $row['nomor_kk'];
                $pemohon->kerja_pemohon = $row['kerja_pemohon'];
                $pemohon->gaji_pemohon = $row['gaji_pemohon'];
                $pemohon->jlh_penghuni = $row['jlh_penghuni'];
                $pemohon->nama_psgn = $row['nama_psgn'];
                $pemohon->kerja_psgn = $row['kerja_psgn'];
                $pemohon->gaji_psgn = $row['gaji_psgn'];
                $pemohon->kode_rusun = $row['kode_rusun'];
                $pemohon->id_berkas = $row['id_berkas'];

                return $pemohon;
            } else {
                return null;
            }
        } finally {
                $statement->closeCursor();
        }
    }

    public function delete($id_pemohon)
    {
        $statement = $this->connection->prepare("DELETE FROM pemohon WHERE id_pemohon = ?");
        
        return $statement->execute([$id_pemohon]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM pemohon");
    }
}
