<?php

namespace Project\Service;

use Project\Domain\Berkas;
use Project\Domain\Pemohon;
use Project\Config\Database;
use Project\Domain\Pengumuman;
use Project\Model\PemohonRequest;
use Project\Model\PemohonResponse;
use Project\Model\ShowPemohonResponse;
use Project\Repository\BerkasRepository;
use Project\Repository\PemohonRepository;
use Project\Exception\ValidationException;
use Project\Repository\PengumumanRepository;

class PemohonService {
    private PemohonRepository $pemohonRepository;
    private BerkasRepository $berkasRepository;
    private PengumumanRepository $pengumumanRepository;

    public function __construct(PemohonRepository $pemohonRepository, BerkasRepository $berkasRepository, PengumumanRepository $pengumumanRepository)
    {
        $this->pemohonRepository = $pemohonRepository;
        $this->berkasRepository = $berkasRepository;
        $this->pengumumanRepository = $pengumumanRepository;
    }

    public function submitHuniRusun(PemohonRequest $request): PemohonResponse
    {
        $this->validatePemohonRequest($request);

        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $berkas = new Berkas();
            $pengumuman = new Pengumuman();

            do {
                $id_berkas = rand();
                $berkasCheck = $this->berkasRepository->findById($id_berkas);
            } while ($berkasCheck != null);

            do {
                $id_pemohon = rand();
                $pemohonCheck = $this->pemohonRepository->findById($id_pemohon);
            } while($pemohonCheck != null);

            do {
                $id_pengumuman = rand();
                $pengumumanCheck = $this->pengumumanRepository->findById($id_pengumuman);
            } while($pengumumanCheck != null);

            $berkas->id_berkas = $id_berkas;
            $berkas->ktp_pmhn = $request->ktp_pmhn;
            $berkas->ktp_psgn = $request->ktp_psgn;
            $berkas->kartu_kk = $request->kartu_kk;
            $berkas->srt_kerja = $request->srt_kerja;
            $berkas->struk_gaji = $request->struk_gaji;
            $berkas->srt_nikah = $request->srt_nikah;

            $this->berkasRepository->save($berkas);

            $pemohon->id_pemohon = $id_pemohon;
            $pemohon->nama_pemohon = $request->nama_pemohon;
            $pemohon->notelp_pemohon = $request->notelp_pemohon;
            $pemohon->nik_pemohon = $request->nik_pemohon;
            $pemohon->nomor_kk = $request->nomor_kk;
            $pemohon->kerja_pemohon = $request->kerja_pemohon;
            $pemohon->gaji_pemohon = $request->gaji_pemohon;
            $pemohon->jlh_penghuni = $request->jlh_penghuni;
            $pemohon->nama_psgn = $request->nama_psgn;
            $pemohon->kerja_psgn = $request->kerja_psgn;
            $pemohon->gaji_psgn = $request->gaji_psgn;
            $pemohon->kode_rusun = $request->kode_rusun;
            $pemohon->id_berkas = $id_berkas;

            $this->pemohonRepository->save($pemohon);

            $pengumuman->id_pengumuman = $id_pengumuman;
            $pengumuman->nama_pemohon = $request->nama_pemohon;
            $pengumuman->nik_pemohon = $request->nik_pemohon;
            $pengumuman->t_wawancara = null;
            $pengumuman->t_hasil = null;
            $pengumuman->keterangan = 'Proses Seleksi';
            $pengumuman->id_pemohon = $id_pemohon;
            $pengumuman->id_penghuni = null;
            $pengumuman->password = null;

            $this->pengumumanRepository->save($pengumuman);

            $response = new PemohonResponse();
            $response->pemohon = $pemohon;

            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    private function validatePemohonRequest(PemohonRequest $request)
    {
        if (
            $request->nama_pemohon == null || $request->notelp_pemohon == null || $request->nik_pemohon == null || $request->nomor_kk == null ||
            $request->kerja_pemohon == null || $request->gaji_pemohon == null || $request->jlh_penghuni == null || $request->nama_psgn == null || $request->kerja_psgn == null ||
            $request->gaji_psgn == null || $request->kode_rusun == null ||
            trim($request->nama_pemohon) == "" || trim($request->notelp_pemohon) == "" || trim($request->nik_pemohon) == "" ||
            trim($request->nomor_kk) == "" || trim($request->kerja_pemohon) == "" || trim($request->gaji_pemohon) == "" || trim($request->jlh_penghuni) == "" ||
            trim($request->nama_psgn) == "" || trim($request->kerja_psgn) == "" || trim($request->gaji_psgn) == "" || trim($request->kode_rusun) == ""
        ) {
            throw new ValidationException("Input tidak boleh kosong!");
        }
    }


    public function showPemohon($id_pengumuman)
    {
        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $pengumuman = new Pengumuman();
            $berkas = new Berkas();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);
            $berkas = $this->berkasRepository->findById($pemohon->id_berkas);

            $response = new ShowPemohonResponse();
            $response->pemohon = $pemohon;
            //$response->berkas = $berkas;

            Database::commitTransaction();

            return $response;
            
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editPemohon($id_pengumuman, PemohonRequest $request)
    {
        $this->validatePemohonRequest($request);

        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $berkas = new Berkas();
            $pengumuman = new Pengumuman();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);
            $berkas = $this->berkasRepository->findById($pemohon->id_berkas);

            $berkas->ktp_pmhn = $request->ktp_pmhn;
            $berkas->ktp_psgn = $request->ktp_psgn;
            $berkas->kartu_kk = $request->kartu_kk;
            $berkas->srt_kerja = $request->srt_kerja;
            $berkas->struk_gaji = $request->struk_gaji;
            $berkas->srt_nikah = $request->srt_nikah;

            $this->berkasRepository->update($berkas);

            $pemohon->nama_pemohon = $request->nama_pemohon;
            $pemohon->notelp_pemohon = $request->notelp_pemohon;
            $pemohon->nik_pemohon = $request->nik_pemohon;
            $pemohon->nomor_kk = $request->nomor_kk;
            $pemohon->kerja_pemohon = $request->kerja_pemohon;
            $pemohon->gaji_pemohon = $request->gaji_pemohon;
            $pemohon->jlh_penghuni = $request->jlh_penghuni;
            $pemohon->nama_psgn = $request->nama_psgn;
            $pemohon->kerja_psgn = $request->kerja_psgn;
            $pemohon->gaji_psgn = $request->gaji_psgn;
            $pemohon->kode_rusun = $request->kode_rusun;

            $this->pemohonRepository->update($pemohon);

            $pengumuman->nama_pemohon = $request->nama_pemohon;
            $pengumuman->nik_pemohon = $request->nik_pemohon;

            $this->pengumumanRepository->update($pengumuman);

            $response = new PemohonResponse();
            $response->pemohon = $pemohon;

            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}