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