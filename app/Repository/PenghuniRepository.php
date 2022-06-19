<?php

namespace Project\Repository;

use Project\Domain\Penghuni;

class PenghuniRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Penghuni $penghuni): Penghuni
    {
        $statement = $this->connection->prepare("INSERT INTO penghuni(id_penghuni, nama_wakil, nik_wakil, nomor_kk, kerja_wakil, gaji_wakil, 
            jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, tgl_huni, username, kode_rusun) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $penghuni->id_penghuni, $penghuni->nama_wakil, $penghuni->nik_wakil, $penghuni->nomor_kk, $penghuni->kerja_wakil, $penghuni->gaji_wakil,
            $penghuni->jlh_penghuni, $penghuni->nama_psgn, $penghuni->kerja_psgn, $penghuni->gaji_psgn, $penghuni->tgl_huni, $penghuni->username,
            $penghuni->kode_rusun
        ]);

        return $penghuni;
    }

    public function update(Penghuni $penghuni): Penghuni
    {
        $statement = $this->connection->prepare("UPDATE penghuni SET nama_wakil = ?, nik_wakil = ?, nomor_kk = ?, kerja_wakil = ?, gaji_wakil = ?, 
            jlh_penghuni = ?, nama_psgn = ?, kerja_psgn = ?, gaji_psgn = ?, tgl_huni = ?, username = ?, kode_rusun = ? WHERE id_penghuni = ?");
        $statement->execute([
            $penghuni->nama_wakil, $penghuni->nik_wakil, $penghuni->nomor_kk, $penghuni->kerja_wakil, $penghuni->gaji_wakil,
            $penghuni->jlh_penghuni, $penghuni->nama_psgn, $penghuni->kerja_psgn, $penghuni->gaji_psgn, $penghuni->tgl_huni, $penghuni->username,
            $penghuni->kode_rusun, $penghuni->id_penghuni
        ]);

        return $penghuni;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_penghuni, nama_wakil, nik_wakil, nomor_kk, kerja_wakil, gaji_wakil, 
            jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, tgl_huni, username, kode_rusun FROM penghuni");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $penghuni = $statement->fetchAll();

                return $penghuni;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_penghuni): ?Penghuni
    {
        $statement = $this->connection->prepare("SELECT id_penghuni, nama_wakil, nik_wakil, nomor_kk, kerja_wakil, gaji_wakil, 
            jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, tgl_huni, username, kode_rusun FROM penghuni WHERE id_penghuni = ?");
        $statement->execute([$id_penghuni]);

        try {
            if ($row = $statement->fetch()) {
                $penghuni = new Penghuni();
                $penghuni->id_penghuni = $row['id_penghuni'];
                $penghuni->nama_wakil = $row['nama_wakil'];
                $penghuni->nik_wakil = $row['nik_wakil'];
                $penghuni->nomor_kk = $row['nomor_kk'];
                $penghuni->kerja_wakil = $row['kerja_wakil'];
                $penghuni->gaji_wakil = $row['gaji_wakil'];
                $penghuni->jlh_penghuni = $row['jlh_penghuni'];
                $penghuni->nama_psgn = $row['nama_psgn'];
                $penghuni->kerja_psgn = $row['kerja_psgn'];
                $penghuni->gaji_psgn = $row['gaji_psgn'];
                $penghuni->tgl_huni = $row['tgl_huni'];
                $penghuni->username = $row['username'];
                $penghuni->kode_rusun = $row['kode_rusun'];

                return $penghuni;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }
    
    public function findByUsername($username): ?Penghuni
    {
        $statement = $this->connection->prepare("SELECT id_penghuni, nama_wakil, nik_wakil, nomor_kk, kerja_wakil, gaji_wakil, 
            jlh_penghuni, nama_psgn, kerja_psgn, gaji_psgn, tgl_huni, username, kode_rusun FROM penghuni WHERE username = ?");
        $statement->execute([$username]);

        try {
            if ($row = $statement->fetch()) {
                $penghuni = new Penghuni();
                $penghuni->id_penghuni = $row['id_penghuni'];
                $penghuni->nama_wakil = $row['nama_wakil'];
                $penghuni->nik_wakil = $row['nik_wakil'];
                $penghuni->nomor_kk = $row['nomor_kk'];
                $penghuni->kerja_wakil = $row['kerja_wakil'];
                $penghuni->gaji_wakil = $row['gaji_wakil'];
                $penghuni->jlh_penghuni = $row['jlh_penghuni'];
                $penghuni->nama_psgn = $row['nama_psgn'];
                $penghuni->kerja_psgn = $row['kerja_psgn'];
                $penghuni->gaji_psgn = $row['gaji_psgn'];
                $penghuni->tgl_huni = $row['tgl_huni'];
                $penghuni->username = $row['username'];
                $penghuni->kode_rusun = $row['kode_rusun'];

                return $penghuni;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_penghuni)
    {
        $statement = $this->connection->prepare("DELETE FROM penghuni WHERE id_penghuni = ?");

        return $statement->execute([$id_penghuni]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM penghuni");
    }
}
