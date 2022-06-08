<?php

namespace Project\Service;

use Project\Config\Database;
use PHPUnit\Framework\TestCase;
use Project\Model\PemohonRequest;
use Project\Service\PemohonService;
use Project\Repository\BerkasRepository;
use Project\Repository\PemohonRepository;


class PemohonServiceTest extends TestCase
{
    private PemohonService $pemohonService;
    private PemohonRepository $pemohonRepository;
    private BerkasRepository $berkasRepository;

    protected function setUp(): void
    {
        $connection = Database::getConnection();
        $this->pemohonRepository = new PemohonRepository($connection);
        $this->berkasRepository = new BerkasRepository($connection);
        $this->pemohonService = new PemohonService($this->pemohonRepository, $this->berkasRepository);

        $this->pemohonRepository->deleteAll();
        $this->berkasRepository->deleteAll();
    }

    public function testSubmitSuccess()
    {
        $request = new PemohonRequest();
        $request->nama_pemohon = 'irvan';
        $request->notelp_pemohon = "085348725149";
        $request->nik_pemohon = "112398193810128";
        $request->nomor_kk = "11231231123";
        $request->kerja_pemohon = "idk";
        $request->gaji_pemohon = "1000000000";
        $request->jlh_penghuni = 4;
        $request->nama_psgn = "dun have";
        $request->kerja_psgn = "idk";
        $request->gaji_psgn = "100000000";
        $request->kode_rusun = 69;

        $request->ktp_pmhn = "here";
        $request->ktp_psgn = "here";
        $request->kartu_kk = "here";
        $request->srt_kerja = "here";
        $request->struk_gaji = "here";
        $request->srt_nikah = "here";

        $response = $this->pemohonService->submitHuniRusun($request);

        self::assertEquals($request->nama_pemohon, $response->pemohon->nama_pemohon);
        self::assertEquals($request->notelp_pemohon, $response->pemohon->notelp_pemohon);
    }
}
