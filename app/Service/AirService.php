<?php

namespace Project\Service;

use Project\Domain\Air;
use Project\Config\Database;
use Project\Repository\AirRepository;


class AirService
{
    private AirRepository $airRepository;

    public function __construct(AirRepository $airRepository)
    {
        $this->airRepository = $airRepository;
    }

    public function getHargaAir()
    {
        try {
            Database::beginTransaction();

            $air = $this->airRepository->readAll();

            Database::commitTransaction();

            return $air;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function showHargaAir($id_air)
    {
        try {
            Database::beginTransaction();

            $air = new Air();
            $air = $this->airRepository->findById($id_air);

            Database::commitTransaction();

            return $air;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function editHargaAir(Air $air_request)
    {
        try {
            Database::beginTransaction();

            $air = new Air();
            $air = $this->airRepository->update($air_request);

            Database::commitTransaction();

            return $air;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}
