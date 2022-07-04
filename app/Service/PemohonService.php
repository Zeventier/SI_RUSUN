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

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);

            $response = new ShowPemohonResponse();
            $response->pemohon = $pemohon;

            Database::commitTransaction();

            return $response;
            
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showBerkas($id_pengumuman)
    {
        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $pengumuman = new Pengumuman();
            $berkas = new Berkas();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);
            $berkas = $this->berkasRepository->findById($pemohon->id_berkas);

            Database::commitTransaction();

            return $berkas;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function uploadBerkas(Berkas $request, $id_pengumuman)
    {
        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $pengumuman = new Pengumuman();
            $berkas = new Berkas();
            $oldBerkas = new Berkas();
            $flag = false;

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);
            $oldBerkas = $this->berkasRepository->findById($pemohon->id_berkas);

            $berkas->id_berkas = $pemohon->id_berkas;
        
            if($request->ktp_pmhn != null) {
                $berkas->ktp_pmhn = $request->ktp_pmhn;
                if($oldBerkas->ktp_pmhn != null) {
                    PemohonService::unlinkFile($oldBerkas->ktp_pmhn);
                }
                $flag = true;
            }
            
            if ($request->ktp_psgn != null) {
                $berkas->ktp_psgn = $request->ktp_psgn;
                if ($oldBerkas->ktp_psgn != null) {
                    PemohonService::unlinkFile($oldBerkas->ktp_psgn);
                }
                $flag = true;
            }
            
            if ($request->kartu_kk != null) {
                $berkas->kartu_kk = $request->kartu_kk;
                if($oldBerkas->kartu_kk != null) {
                    PemohonService::unlinkFile($oldBerkas->kartu_kk);
                }
                $flag = true;
            }
            
            if ($request->srt_kerja != null) {
                $berkas->srt_kerja = $request->srt_kerja;
                if($oldBerkas->srt_kerja != null) {
                    PemohonService::unlinkFile($oldBerkas->srt_kerja);
                }
                $flag = true;
            }
            
            if ($request->struk_gaji != null) {
                $berkas->struk_gaji = $request->struk_gaji;
                if($oldBerkas->struk_gaji != null) {
                    PemohonService::unlinkFile($oldBerkas->struk_gaji);
                }
                $flag = true;
            }
            
            if ($request->srt_nikah != null) {
                $berkas->srt_nikah = $request->srt_nikah;
                if($oldBerkas->srt_nikah != null) {
                    PemohonService::unlinkFile($oldBerkas->srt_nikah);
                }
                $flag = true;
            }

            if($flag){
                $this->berkasRepository->update($berkas);
            }
           
            Database::commitTransaction();

        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    function unlinkFile($filename)
    {
        // try to force symlinks
        if (is_link($filename)) {
            $sym = @readlink($filename);
            if ($sym) {
                return is_writable($filename) && @unlink($filename);
            }
        }

        // try to use real path
        if (realpath($filename) && realpath($filename) !== $filename) {
            return is_writable($filename) && @unlink(realpath($filename));
        }

        // default unlink
        return is_writable($filename) && @unlink($filename);
    }

    public function editPemohon($id_pengumuman, PemohonRequest $request)
    {
        $this->validatePemohonRequest($request);

        try {
            Database::beginTransaction();

            $pemohon = new Pemohon();
            $pengumuman = new Pengumuman();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $pemohon = $this->pemohonRepository->findById($pengumuman->id_pemohon);

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