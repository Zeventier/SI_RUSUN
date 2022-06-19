<?php

namespace Project\Service;

use Project\Domain\Pemohon;
use Project\Config\Database;
use Project\Domain\Pengumuman;
use Project\Model\AturJadwalRequest;
use Project\Model\AturJadwalResponse;
use Project\Model\PengumumanResponse;
use Project\Repository\PemohonRepository;
use Project\Repository\PengumumanRepository;

class PengumumanService {
    private PengumumanRepository $pengumumanRepository;
    private PemohonRepository $pemohonRepository;

    public function __construct(PengumumanRepository $pengumumanRepository, PemohonRepository $pemohonRepository)
    {
        $this->pengumumanRepository = $pengumumanRepository;

        $this->pemohonRepository = $pemohonRepository;
    }

    public function showDaftarPemohon()
    {
        try {
            Database::beginTransaction();

            $pengumuman = $this->pengumumanRepository->readAll();

            Database::commitTransaction();

            return $pengumuman;

        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function deletePemohon($id_pengumuman)
    {
        try {
            Database::beginTransaction();

            $pengumuman = new Pengumuman();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);

            $this->pengumumanRepository->delete($id_pengumuman);
            $this->pemohonRepository->delete($pengumuman->id_pemohon);

            Database::commitTransaction();

        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function aturJadwal(AturJadwalRequest $aturJadwalRequest): AturJadwalResponse
    {
        try {
            Database::beginTransaction();

            $pengumuman = new Pengumuman();

            $pengumuman = $this->pengumumanRepository->findById($aturJadwalRequest->id_pengumuman);

            $pengumuman->t_wawancara = $aturJadwalRequest->t_wawancara;
            $pengumuman->t_hasil = $aturJadwalRequest->t_hasil;

            $pengumuman = $this->pengumumanRepository->update($pengumuman);

            $response = new AturJadwalResponse();
            $response->pengumuman = $pengumuman;
            
            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}