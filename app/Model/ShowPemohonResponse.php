<?php

namespace Project\Model;

use Project\Domain\Berkas;
use Project\Domain\Pemohon;

class ShowPemohonResponse
{
    public Pemohon $pemohon;
    public Berkas $berkas;
}
