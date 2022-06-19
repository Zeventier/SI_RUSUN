<?php

namespace Project\Controller;

use Project\App\View;
use Project\Domain\Sewa;
use Project\Domain\Keluhan;
use Project\Config\Database;
use Project\Service\AirService;
use Project\Service\SewaService;
use Project\Service\UserService;
use Project\Service\KeluhanService;
use Project\Service\SessionService;
use Project\Service\PenghuniService;
use Project\Repository\AirRepository;
use Project\Repository\SewaRepository;
use Project\Repository\UserRepository;
use Project\Repository\KeluhanRepository;
use Project\Repository\SessionRepository;
use Project\Exception\ValidationException;
use Project\Repository\PenghuniRepository;

class PortalUserController 
{
    private SessionService $sessionService;
    private SewaService $sewaService;
    private PenghuniService $penghuniService;
    private KeluhanService $keluhanService;
    private airService $airService;

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
        $this->penghuniService = new PenghuniService($penghuniRepository, $userRepository);

        $keluhanRepository = new KeluhanRepository($connection);
        $this->keluhanService = new KeluhanService($keluhanRepository);

        $airRepository = new AirRepository($connection);
        $this->airService = new AirService($airRepository);
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

        $response = $this->penghuniService->showPenghuniUsername($user->username);


        View::render('Portal/User/profil', [
            'title' => 'Portal Rusun User',
            'penghuni' => $response->penghuni,
            'user' => $response->user
        ]);
    }

    public function tagihan()
    {
        $user = $this->sessionService->current();

        $tagihan = new Sewa();
        $tagihan = $this->sewaService->showTagihanUsername($user->username);
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