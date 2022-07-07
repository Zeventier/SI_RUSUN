<?php

namespace Project\Service;

use Project\Domain\Sewa;
use Project\Config\Database;
use Project\Repository\SewaRepository;
use Project\Exception\ValidationException;




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

    public function showTagihanUsername($username, $year, $month)
    {
        try {
            Database::beginTransaction();

            $tagihan = new Sewa();
            $tagihan = $this->sewaRepository->findByUsername($username, $year, $month);

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

            $checkTagihanUser = new Sewa();

            $month = date('m', strtotime($sewa->deadline));

            $checkTagihanUser = $this->sewaRepository->findByUserMonth($sewa->username, $month);

            if ($checkTagihanUser != null) {
                throw new ValidationException("Tagihan bulan yang dipilih untuk penghuni ini sudah ada!");
            }

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
            $tagihan->id_sewa = $tagihan_request->id_sewa;
            $checkTagihanUser = new Sewa();

            $month = date('m', strtotime($tagihan_request->deadline));

            $checkTagihanUser = $this->sewaRepository->findByUserMonth($tagihan_request->username, $month);

            if($checkTagihanUser != null && $checkTagihanUser[0]['id_sewa'] != $tagihan->id_sewa) {
                throw new ValidationException("Tagihan bulan yang dipilih untuk penghuni ini sudah ada!");
            } else {
                $tagihan = $this->sewaRepository->update($tagihan_request);
            }

            Database::commitTransaction();

            return $tagihan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}