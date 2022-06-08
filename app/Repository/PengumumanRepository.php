<?php

namespace Project\Repository;

use Project\Domain\Pengumuman;

class PengumumanRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Pengumuman $pengumuman): Pengumuman
    {
        $statement = $this->connection->prepare("INSERT INTO pengumuman(id_pengumuman, nama_pemohon, nik_pemohon, t_wawancara, 
            t_hasil, keterangan, id_pemohon, id_penghuni) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $pengumuman->id_pengumuman, $pengumuman->nama_pemohon, $pengumuman->nik_pemohon, $pengumuman->t_wawancara, $pengumuman->t_hasil,
            $pengumuman->keterangan, $pengumuman->id_pemohon, $pengumuman->id_penghuni
        ]);
        return $pengumuman;
    }

    public function update(Pengumuman $pengumuman): Pengumuman
    {
        $statement = $this->connection->prepare("UPDATE pengumuman SET nama_pemohon = ?, nik_pemohon = ?, t_wawancara = ?, 
            t_hasil = ?, keterangan = ?, id_penghuni = ? WHERE id_pengumuman = ?");
        $statement->execute([
            $pengumuman->nama_pemohon, $pengumuman->nik_pemohon, $pengumuman->t_wawancara, $pengumuman->t_hasil,
            $pengumuman->keterangan, $pengumuman->id_penghuni
        ]);

        return $pengumuman;
    }

    public function readAll()
    {
        $statement = $this->connection->prepare("SELECT id_pengumuman, nama_pemohon, nik_pemohon, t_wawancara, 
            t_hasil, keterangan, id_pemohon, id_penghuni FROM pengumuman");
        $statement->execute();

        try {
            if ($statement->rowCount() > 0) {
                $pengumuman = $statement->fetchAll();

                return $pengumuman;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function findById(?int $id_pengumuman): ?Pengumuman
    {
        $statement = $this->connection->prepare("SELECT id_pengumuman, nama_pemohon, nik_pemohon, t_wawancara, 
            t_hasil, keterangan, id_pemohon, id_penghuni FROM pengumuman WHERE id_pengumuman = ?");
        $statement->execute([$id_pengumuman]);

        try {
            if ($row = $statement->fetch()) {
                $pengumuman = new Pengumuman();
                $pengumuman->id_pengumuman = $row['id_pengumuman'];
                $pengumuman->nama_pemohon = $row['nama_pemohon'];
                $pengumuman->nik_pemohon = $row['nik_pemohon'];
                $pengumuman->t_wawancara = $row['t_wawancara'];
                $pengumuman->t_hasil = $row['t_hasil'];
                $pengumuman->keterangan = $row['keterangan'];
                $pengumuman->id_pemohon = $row['id_pemohon'];
                $pengumuman->id_penghuni = $row['id_penghuni'];

                return $pengumuman;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete($id_pengumuman)
    {
        $statement = $this->connection->prepare("DELETE FROM pengumuman WHERE id_pengumuman = ?");

        return $statement->execute([$id_pengumuman]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM pengumuman");
    }
}
