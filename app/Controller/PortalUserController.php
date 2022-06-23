<?php

namespace Project\Controller;

use Project\App\View;
use Project\Domain\Sewa;
use Project\Domain\Keluhan;
use Project\Config\Database;
use Project\Service\AirService;
use Project\Service\SewaService;
use Project\Service\UserService;
use Project\Service\RusunService;
use Project\Model\PenghuniRequest;
use Project\Service\KeluhanService;
use Project\Service\SessionService;
use Project\Service\PenghuniService;
use Project\Repository\AirRepository;
use Project\Repository\SewaRepository;
use Project\Repository\UserRepository;
use Project\Repository\RusunRepository;
use Project\Repository\KeluhanRepository;
use Project\Repository\SessionRepository;
use Project\Exception\ValidationException;
use Project\Repository\PenghuniRepository;
use Project\Repository\PengumumanRepository;

class PortalUserController 
{
    private SessionService $sessionService;
    private SewaService $sewaService;
    private PenghuniService $penghuniService;
    private KeluhanService $keluhanService;
    private AirService $airService;
    private RusunService $rusunService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $sessionRepository = new SessionRepository($connection);
        $userRepository = new UserRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);

        $this->userService = new UserService($userRepository);

        $sewaRepository = new SewaRepository($connection);
        $this->sewaService = new SewaService($sewaRepository);

        $penghuniRepository = new PenghuniRepository($connection);
        $pengumumanRepository = new PengumumanRepository($connection);
        $rusunRepository = new RusunRepository($connection);
        $this->penghuniService = new PenghuniService($penghuniRepository, $userRepository, $pengumumanRepository, $rusunRepository);

        $keluhanRepository = new KeluhanRepository($connection);
        $this->keluhanService = new KeluhanService($keluhanRepository);

        $airRepository = new AirRepository($connection);
        $this->airService = new AirService($airRepository);

        $this->rusunService = new RusunService($rusunRepository);

    }

    public function beranda()
    {
        View::render('Portal/User/beranda', [
            'title' => 'Portal Rusun User'
        ]);
    }

    public function rusunku()
    {
        View::render('Portal/User/rusunku', [
            'title' => 'Portal Rusun User'
        ]);
    }

    public function profil()
    {
        $user = $this->sessionService->current();
        $daftarRuangan = $this->rusunService->showDaftarRuangan();

        $response = $this->penghuniService->showPenghuniUsername($user->username);


        View::render('Portal/User/profil', [
            'title' => 'Portal Rusun User',
            'penghuni' => $response->penghuni,
            'user' => $response->user,
            'ruangan' => $daftarRuangan
        ]);
    }

    public function postProfil()
    {
        $id_penghuni = $_GET['id_penghuni'];

        $request = new PenghuniRequest();

        $request->nama_wakil = $_POST['nama_wakil'];
        $request->nik_wakil = $_POST['nik_wakil'];
        $request->nomor_kk = $_POST['nomor_kk'];
        $request->kerja_wakil = $_POST['kerja_wakil'];
        $request->gaji_wakil = $_POST['gaji_wakil'];
        $request->jlh_penghuni = $_POST['jlh_penghuni'];
        $request->nama_psgn = $_POST['nama_psgn'];
        $request->kerja_psgn = $_POST['kerja_psgn'];
        $request->gaji_psgn = $_POST['gaji_psgn'];
        $request->tgl_huni = $_POST['tgl_huni'];
        $request->username = $_POST['username'];
        $request->kode_rusun = $_POST['ruangan'];

        try {
            $this->penghuniService->editPenghuni($id_penghuni, $request);

            View::redirect('/portal/user/rusunku');
        } catch (ValidationException $exception) {
            View::render('Portal/Usern', [
                "title" => "Portal Rusun User",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function tagihan()
    {
        $year = date('Y', strtotime($_GET['date']));
        $month = date('m', strtotime($_GET['date']));
        $user = $this->sessionService->current();

        $tagihan = new Sewa();
        $tagihan = $this->sewaService->showTagihanUsername($user->username, $year, $month);
        $air = $this->airService->getHargaAir();

        View::render('Portal/User/tagihan', [
            'title' => 'Portal Rusun User',
            'data' => $tagihan,
            'air' => $air
        ]);
    }

    public function pemberitahuan()
    {
        View::render('Portal/User/pemberitahuan', [
            'title' => 'Portal Rusun User'
        ]);
    }

    public function keluhan()
    {
        $user = $this->sessionService->current();

        $keluhan = $this->keluhanService->showDaftarKeluhanUsername($user->username);

        View::render('Portal/User/keluhan', [
            'title' => 'Portal Rusun User',
            'data' => $keluhan
        ]);
    }

    public function postKeluhan()
    {
        $user = $this->sessionService->current();

        $request = new Keluhan();
        $request->keluhan = $_POST['keluhan'];
        $request->username = $user->username;
        $request->waktu = date("Y-m-d H:i:s");

        try {
            $this->keluhanService->addKeluhan($request);

            View::redirect('/portal/user/keluhan');
        } catch (ValidationException $exception) {
            View::render('Portal/User/keluhan', [
                'title' => 'Portal Rusun User',
                'error' => $exception
            ]);
        }
    }

    public function logout()
    {
        $this->sessionService->destroy();
        View::redirect("/");
    }
}