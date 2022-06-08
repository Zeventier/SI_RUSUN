<?php

class Pemohon
{
    private $table = 'pemohon';

    public  $id_pemohon, $nama_pemohon, $notelp_pemohon, $nik_pemohon, $nomor_kk, $kerja_pemohon,
        $gaji_pemohon, $jlh_penghuni, $nama_psgn, $kerja_psgn, $gaji_psgn, $noak_suami, $noak_istri;

    public function insert()
    {
        if (
            $this->id_pemohon == null || $this->nama_pemohon == null || $this->notelp_pemohon == null || $this->nik_pemohon == null || $this->nomor_kk == null ||
            $this->kerja_pemohon == null || $this->gaji_pemohon == null || $this->jlh_penghuni == null || $this->nama_psgn == null || $this->kerja_psgn == null ||
            $this->gaji_psgn == null || $this->noak_suami == null || $this->noak_istri == null ||
            trim($this->id_pemohon) == "" || trim($this->nama_pemohon) == "" || trim($this->notelp_pemohon) == "" || trim($this->nik_pemohon) == "" ||
            trim($this->nomor_kk) == "" || trim($this->kerja_pemohon) == "" || trim($this->gaji_pemohon) == "" || trim($this->jlh_penghuni) == "" ||
            trim($this->nama_psgn) == "" || trim($this->kerja_psgn) == "" || trim($this->gaji_psgn) == "" || trim($this->noak_suami) == "" || trim($this->noak_istri) == ""
        ) {
            throw new ValidationException("Input tidak boleh kosong!");
        } else {
            $sql = "INSERT INTO $this->table(id_pemohon, nama_pemohon, notelp_pemohon, nik_pemohon, nomor_kk, kerja_pemohon, gaji_pemohon, jlh_penghuni, nama_psgn, kerja_psgn, 
            gaji_psgn, noak_suami, noak_istri) 
            VALUES(:id_pemohon, :nama_pemohon, :notelp_pemohon, :nik_pemohon, :nomor_kk, :kerja_pemohon, :gaji_pemohon, :jlh_penghuni, :nama_psgn, :kerja_psgn, 
            :gaji_psgn, :noak_suami, :noak_istri)";

            $stmt = Database::connection()->prepare($sql);
            $stmt->bindParam(':id_pemohon', $this->id_pemohon);
            $stmt->bindParam(':nama_pemohon', $this->nama_pemohon);
            $stmt->bindParam(':notelp_pemohon', $this->notelp_pemohon);
            $stmt->bindParam(':nik_pemohon', $this->nik_pemohon);
            $stmt->bindParam(':nomor_kk', $this->nomor_kk);
            $stmt->bindParam(':kerja_pemohon', $this->kerja_pemohon);
            $stmt->bindParam(':gaji_pemohon', $this->gaji_pemohon);
            $stmt->bindParam(':jlh_penghuni', $this->jlh_penghuni);
            $stmt->bindParam(':nama_psgn', $this->nama_psgn);
            $stmt->bindParam(':kerja_psgn', $this->kerja_psgn);
            $stmt->bindParam(':gaji_psgn', $this->gaji_psgn);
            $stmt->bindParam(':noak_suami', $this->noak_suami);
            $stmt->bindParam(':noak_istri', $this->noak_istri);

            return $stmt->execute();
        }
    }

    public function readAll()
    {
        $sql = "SELECT * FROM $this->table ORDER BY nama_pemohon ASC";
        $stmt = Database::connection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if ($stmt->rowCount() > 0) {
            return $result;
        }
    }

    public function readById($id_pemohon)
    {
        $sql = "SELECT * FROM $this->table WHERE id_pemohon = :id_pemohon";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bindParam(':id_pemohon', $id_pemohon);
        $stmt->execute();
        if ($row = $stmt->fetch()) {
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
            $pemohon->noak_suami = $row['noak_suami'];
            $pemohon->noak_istri = $row['noak_istri'];

            return $pemohon;
        } else {
            return null;
        }
    }

    public function update($id_pemohon)
    {
        if (
            $this->nama_pemohon == null || $this->notelp_pemohon == null || $this->nik_pemohon == null || $this->nomor_kk == null ||
            $this->kerja_pemohon == null || $this->gaji_pemohon == null || $this->jlh_penghuni == null || $this->nama_psgn == null || $this->kerja_psgn == null ||
            $this->gaji_psgn == null || $this->noak_suami == null || $this->noak_istri == null ||
            trim($this->nama_pemohon) == "" || trim($this->notelp_pemohon) == "" || trim($this->nik_pemohon) == "" ||
            trim($this->nomor_kk) == "" || trim($this->kerja_pemohon) == "" || trim($this->gaji_pemohon) == "" || trim($this->jlh_penghuni) == "" ||
            trim($this->nama_psgn) == "" || trim($this->kerja_psgn) == "" || trim($this->gaji_psgn) == "" || trim($this->noak_suami) == "" || trim($this->noak_istri) == ""
        ) {
            throw new ValidationException("Input tidak boleh kosong!");
        } else {
            $sql  = "UPDATE $this->table SET nama_pemohon=:nama_pemohon, notelp_pemohon=:notelp_pemohon, nik_pemohon=:nik_pemohon, nomor_kk=:nomor_kk, 
            kerja_pemohon=:kerja_pemohon, gaji_pemohon=:gaji_pemohon, jlh_penghuni=:jlh_penghuni, nama_psgn=:nama_psgn, kerja_psgn=:nama_psgn, 
            gaji_psgn=:gaji_psgn, noak_suami=:noak_suami, noak_istri=:noak_istri
            WHERE id_pemohon=:id_pemohon";

            $stmt = Database::connection()->prepare($sql);
            $stmt->bindParam(':id_pemohon', $id_pemohon);
            $stmt->bindParam(':nama_pemohon', $this->nama_pemohon);
            $stmt->bindParam(':notelp_pemohon', $this->notelp_pemohon);
            $stmt->bindParam(':nik_pemohon', $this->nik_pemohon);
            $stmt->bindParam(':nomor_kk', $this->nomor_kk);
            $stmt->bindParam(':kerja_pemohon', $this->kerja_pemohon);
            $stmt->bindParam(':gaji_pemohon', $this->gaji_pemohon);
            $stmt->bindParam(':jlh_penghuni', $this->jlh_penghuni);
            $stmt->bindParam(':nama_psgn', $this->nama_psgn);
            $stmt->bindParam(':kerja_psgn', $this->kerja_psgn);
            $stmt->bindParam(':gaji_psgn', $this->gaji_psgn);
            $stmt->bindParam(':noak_suami', $this->noak_suami);
            $stmt->bindParam(':noak_istri', $this->noak_istri);

            return $stmt->execute();
        }
    }

    public function delete($id_pemohon)
    {
        $sql = "DELETE FROM $this->table WHERE id_pemohon = :id_pemohon";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bindParam(':id_pemohon', $id_pemohon);

        return $stmt->execute();
    }

    public function deleteAll()
    {
        $sql = "DELETE FROM $this->table";
        $stmt = Database::connection()->prepare($sql);
        return $stmt->execute();
    }
}
