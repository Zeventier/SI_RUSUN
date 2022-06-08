<?php

namespace Project\Service;

use Project\Domain\Keluhan;
use Project\Config\Database;
use Project\Repository\KeluhanRepository;




class KeluhanService
{
    private KeluhanRepository $keluhanRepository;

    public function __construct(KeluhanRepository $keluhanRepository)
    {
        $this->keluhanRepository = $keluhanRepository;
    }

    public function addKeluhan(Keluhan $keluhan_request)
    {
        try {
            Database::beginTransaction();

            $keluhan = new Keluhan();
            $keluhan = $keluhan_request;

            do {
                $id_keluhan = rand();
                $idCheck = $this->keluhanRepository->findById($id_keluhan);
            } while ($idCheck != null);

            $keluhan->id_keluhan = $id_keluhan;

            $this->keluhanRepository->save($keluhan);

            Database::commitTransaction();

            return $keluhan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showDaftarKeluhanMY($year, $month)
    {
        try {
            Database::beginTransaction();

            $keluhan = $this->keluhanRepository->findByMY($year, $month);

            Database::commitTransaction();

            return $keluhan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showDaftarKeluhanUsername($username)
    {
        try {
            Database::beginTransaction();

            $keluhan = $this->keluhanRepository->findByUsername($username);

            Database::commitTransaction();

            return $keluhan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showKeluhan($id_keluhan)
    {
        try {
            Database::beginTransaction();

            $keluhan = new Keluhan();
            $keluhan = $this->keluhanRepository->findById($id_keluhan);

            Database::commitTransaction();

            return $keluhan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}
