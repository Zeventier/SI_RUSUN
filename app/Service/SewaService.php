<?php

namespace Project\Service;

use Project\Domain\Sewa;
use Project\Config\Database;
use Project\Repository\SewaRepository;




class SewaService {
    private SewaRepository $sewaRepository;

    public function __construct(SewaRepository $sewaRepository)
    {
        $this->sewaRepository = $sewaRepository;
    }

    public function showDaftarTagihanMY($year, $month)
    {
        try {
            Database::beginTransaction();

            $tagihan = $this->sewaRepository->findByMY($year, $month);

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showTagihanUsername($username)
    {
        try {
            Database::beginTransaction();

            $tagihan = new Sewa();
            $tagihan = $this->sewaRepository->findByUsername($username);

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showTagihan($id_tagihan)
    {
        try {
            Database::beginTransaction();

            $tagihan = new Sewa();
            $tagihan = $this->sewaRepository->findById($id_tagihan);

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function tambahTagihan(Sewa $sewa)
    {
        try {
            Database::beginTransaction();

            do {
                $id_sewa = rand();
                $sewaCheck = $this->sewaRepository->findById($id_sewa);
            } while ($sewaCheck != null);

            $tagihan = new Sewa();
            $tagihan->id_sewa = $id_sewa;
            $tagihan->sewa_rusun = $sewa->sewa_rusun;
            $tagihan->debit_air = $sewa->debit_air;
            $tagihan->keterangan = $sewa->keterangan;
            $tagihan->deadline = $sewa->deadline;
            $tagihan->username = $sewa->username;
            
            $tagihan = $this->sewaRepository->save($tagihan);

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editTagihan(Sewa $tagihan_request)
    {
        try {
            Database::beginTransaction();

            $tagihan = new Sewa();
            $tagihan = $this->sewaRepository->update($tagihan_request);

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}