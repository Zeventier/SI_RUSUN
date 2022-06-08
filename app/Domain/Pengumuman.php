<?php

namespace Project\Domain;

class Pengumuman
{
    public ?int $id_pengumuman = null;
    public ?string $nama_pemohon = null;
    public ?string $nik_pemohon = null;
    public ?string $t_wawancara = null;
    public ?string $t_hasil = null;
    public ?string $keterangan = null;
    public ?int $id_pemohon = null;
    public ?int $id_penghuni = null;
}
