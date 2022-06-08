<?php

namespace Project\Service;

use Project\Config\Database;
use Project\Domain\Tanggapan;
use Project\Repository\TanggapanRepository;


class TanggapanService
{
    private TanggapanRepository $tanggapanRepository;

    public function __construct(TanggapanRepository $tanggapanRepository)
    {
        $this->tanggapanRepository = $tanggapanRepository;
    }

    public function addTanggapan(Tanggapan $tanggapan_request)
    {
        try {
            Database::beginTransaction();

            $tanggapan = new Tanggapan();
            $tanggapan = $tanggapan_request;

            do {
                $id_tanggapan = rand();
                $idCheck = $this->tanggapanRepository->findById($id_tanggapan);
            } while ($idCheck != null);

            $tanggapan->id_tanggapan = $id_tanggapan;

            $this->penghuniRepository->save($tanggapan);

            Database::commitTransaction();

            return $tanggapan;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}
