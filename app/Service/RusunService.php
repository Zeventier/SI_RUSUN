<?php

namespace Project\Service;

use Project\Domain\Rusun;
use Project\Config\Database;
use Project\Repository\RusunRepository;

class RusunService {
    private RusunRepository $rusunRepository;

    public function __construct(RusunRepository $rusunRepository)
    {
        $this->rusunRepository = $rusunRepository;
    }

    public function showDaftarRuangan()
    {
        try {
            Database::beginTransaction();

            $ruangan = $this->ruanganRepository->readAll();

            Database::commitTransaction();

            return $ruangan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showRuangan($kode_ruangan)
    {
        try {
            Database::beginTransaction();

            $ruangan = new Rusun();

            $ruangan = $this->rusunRepository->findById($kode_ruangan);

            Database::commitTransaction();

            return $ruangan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function addRuangan(Rusun $request)
    {
        try {
            Database::beginTransaction();

            $ruangan = new Rusun();

            do {
                $kode_ruangan = rand();
                $ruanganCheck = $this->rusunRepository->findById($kode_ruangan);
            } while ($ruanganCheck != null);

            $ruangan = $request;
            $ruangan->kode_rusun = $kode_ruangan;

            $ruangan = $this->rusunRepository->save($ruangan);

            Database::commitTransaction();

            return $ruangan;
            
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editRuangan($kode_ruangan, Rusun $request)
    {
        try {
            Database::beginTransaction();

            $ruangan = new Rusun();

            $ruangan = $request;
            $ruangan->kode_rusun = $kode_ruangan;

            $ruangan = $this->rusunRepository->update($ruangan);

            Database::commitTransaction();

            return $ruangan;

        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function deleteRuangan($kode_ruangan)
    {
        try {
            Database::beginTransaction();

            $this->rusunRepository->delete($kode_ruangan);

            Database::commitTransaction();
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}