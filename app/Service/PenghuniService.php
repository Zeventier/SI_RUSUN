<?php

namespace Project\Service;

use Project\Domain\User;
use Project\Domain\Rusun;
use Project\Config\Database;
use Project\Domain\Penghuni;
use Project\Domain\Pengumuman;
use Project\Model\PenghuniRequest;
use Project\Model\PenghuniResponse;
use Project\Repository\UserRepository;
use Project\Model\ShowPenghuniResponse;
use Project\Repository\RusunRepository;
use Project\Exception\ValidationException;
use Project\Repository\PenghuniRepository;
use Project\Repository\PengumumanRepository;



class PenghuniService {
    private PenghuniRepository $penghuniRepository;
    private PengumumanRepository $pengumumanRepository;
    private RusunRepository $rusunRepository;
    private UserRepository $userRepository;

    public function __construct(PenghuniRepository $penghuniRepository, UserRepository $userRepository, PengumumanRepository $pengumumanRepository, RusunRepository $rusunRepository)
    {
        $this->penghuniRepository = $penghuniRepository;
        $this->userRepository = $userRepository;
        $this->pengumumanRepository = $pengumumanRepository;
        $this->rusunRepository = $rusunRepository;
    }

    public function addPenghuni(PenghuniRequest $request, $id_pengumuman)
    {
        $this->validatePenghuniRequest($request);

        try {
            Database::beginTransaction();

            $penghuni = new Penghuni();
            $pengumuman = new Pengumuman();
            $rusun = new Rusun();

            $pengumuman = $this->pengumumanRepository->findById($id_pengumuman);
            $rusun = $this->rusunRepository->findById($request->kode_rusun);

            do {
                $id_penghuni = rand();
                $penghuniCheck = $this->penghuniRepository->findById($id_penghuni);
            } while ($penghuniCheck != null);

            $penghuni->id_penghuni = $id_penghuni;
            $penghuni->nama_wakil = $request->nama_wakil;
            $penghuni->nik_wakil = $request->nik_wakil;
            $penghuni->nomor_kk = $request->nomor_kk;
            $penghuni->kerja_wakil = $request->kerja_wakil;
            $penghuni->gaji_wakil = $request->gaji_wakil;
            $penghuni->jlh_penghuni = $request->jlh_penghuni;
            $penghuni->nama_psgn = $request->nama_psgn;
            $penghuni->kerja_psgn = $request->kerja_psgn;
            $penghuni->gaji_psgn = $request->gaji_psgn;
            $penghuni->tgl_huni = $request->tgl_huni;
            $penghuni->username = $request->username;
            $penghuni->kode_rusun = $request->kode_rusun;

            $this->penghuniRepository->save($penghuni);

            $pengumuman->nama_pemohon = $request->nama_wakil;
            $pengumuman->nik_pemohon = $request->nik_wakil;
            $pengumuman->keterangan = 'Lolos';
            $pengumuman->password = $request->password;
            $pengumuman->id_penghuni = $id_penghuni;

            $this->pengumumanRepository->update($pengumuman);

            $rusun->keterangan = 'Terisi';

            $this->rusunRepository->update($rusun);

            $response = new PenghuniResponse();
            $response->penghuni = $penghuni;

            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editPenghuni($id_penghuni, PenghuniRequest $request)
    {
        $this->validatePenghuniRequest($request);

        try {
            Database::beginTransaction();

            $penghuni = new Penghuni();

            $penghuni->id_penghuni = $id_penghuni;
            $penghuni->nama_wakil = $request->nama_wakil;
            $penghuni->nik_wakil = $request->nik_wakil;
            $penghuni->nomor_kk = $request->nomor_kk;
            $penghuni->kerja_wakil = $request->kerja_wakil;
            $penghuni->gaji_wakil = $request->gaji_wakil;
            $penghuni->jlh_penghuni = $request->jlh_penghuni;
            $penghuni->nama_psgn = $request->nama_psgn;
            $penghuni->kerja_psgn = $request->kerja_psgn;
            $penghuni->gaji_psgn = $request->gaji_psgn;
            $penghuni->tgl_huni = $request->tgl_huni;
            $penghuni->username = $request->username;
            $penghuni->kode_rusun = $request->kode_rusun;

            $this->penghuniRepository->update($penghuni);

            $response = new PenghuniResponse();
            $response->penghuni = $penghuni;

            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showDaftarPenghuni()
    {
        try {
            Database::beginTransaction();

            $penghuni = $this->penghuniRepository->readAll();

            Database::commitTransaction();

            return $penghuni;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showPenghuni($id_penghuni)
    {
        try {
            Database::beginTransaction();

            $penghuni = new Penghuni();
            $user = new User();

            $penghuni = $this->penghuniRepository->findById($id_penghuni);
            $user = $this->userRepository->findById($penghuni->username);

            $response = new ShowPenghuniResponse();
            $response->penghuni = $penghuni;
            $response->user = $user;

            Database::commitTransaction();

            return $response;

        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showPenghuniUsername($username)
    {
        try {
            Database::beginTransaction();

            $penghuni = new Penghuni();
            $user = new User();

            $penghuni = $this->penghuniRepository->findByUsername($username);
            $user = $this->userRepository->findById($username);

            $response = new ShowPenghuniResponse();
            $response->penghuni = $penghuni;
            $response->user = $user;

            Database::commitTransaction();

            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function deletePenghuni($id_penghuni)
    {
        try {
            Database::beginTransaction();

            $penghuni = new Penghuni();

            $penghuni = $this->penghuniRepository->findById($id_penghuni);

            $this->penghuniRepository->delete($id_penghuni);
            $this->userRepository->delete($penghuni->username);

            Database::commitTransaction();
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    private function validatePenghuniRequest(PenghuniRequest $request)
    {
        if (
            $request->nama_wakil == null || $request->nik_wakil == null || $request->nomor_kk == null || $request->kerja_wakil == null ||
            $request->gaji_wakil == null || $request->jlh_penghuni == null || $request->nama_psgn == null || $request->kerja_psgn == null ||
            $request->gaji_psgn == null || $request->tgl_huni == null || $request->kode_rusun == null ||
            trim($request->nama_wakil) == "" || trim($request->nik_wakil) == "" || trim($request->nomor_kk) == "" || trim($request->kerja_wakil) == "" || 
            trim($request->gaji_wakil) == "" || trim($request->jlh_penghuni) == "" || trim($request->nama_psgn) == "" || trim($request->kerja_psgn) == "" || 
            trim($request->gaji_psgn) == "" || trim($request->tgl_huni) == "" || trim($request->kode_rusun) == ""
        ) {
            throw new ValidationException("Input tidak boleh kosong!");
        }
    }
}