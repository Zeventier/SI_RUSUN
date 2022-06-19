<?php

namespace Project\Controller;

use Project\App\View;
use Project\Config\Database;
use Project\Service\UserService;
use Project\Model\PemohonRequest;
use Project\Model\UserLoginRequest;
use Project\Service\PemohonService;
use Project\Service\SessionService;
use Project\Repository\UserRepository;
use Project\Repository\BerkasRepository;
use Project\Repository\PemohonRepository;
use Project\Repository\SessionRepository;
use Project\Exception\ValidationException;
use Project\Repository\PengumumanRepository;

class HomeController
{
    private UserService $userService;
    private SessionService $sessionService;
    private PemohonService $pemohonService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $userRepository = new UserRepository($connection);
        $this->userService = new UserService($userRepository);

        $sessionRepository = new SessionRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);

        $pemohonRepository = new PemohonRepository($connection);
        $berkasRepository = new BerkasRepository($connection);
        $pengumumanRepository = new PengumumanRepository($connection);
        $this->pemohonService = new PemohonService($pemohonRepository, $berkasRepository, $pengumumanRepository);
    }


    public function index()
    {
        View::render('Home/index', [
            "title" => "SI Rusun"
        ]);
    }

    public function pengumuman()
    {
        View::render('Home/pengumuman', [
            "title" => "SI Rusun"
        ]);
    }

    public function huniRusun()
    {
        View::render('Home/huni_rusun', [
            "title" => "SI Rusun"
        ]);
    }

    public function postHuniRusun()
    {
        $request = new PemohonRequest();
        $request->nama_pemohon = $_POST['nama_pemohon'];
        $request->notelp_pemohon = $_POST['no_telp'];
        $request->nik_pemohon = $_POST['nik_pemohon'];
        $request->nomor_kk = $_POST['no_kk'];
        $request->kerja_pemohon = $_POST['kerja_pemohon'];
        $request->gaji_pemohon = $_POST['gaji_pemohon'];
        $request->jlh_penghuni = $_POST['jlh_penghuni'];
        $request->nama_psgn = $_POST['nama_psgn'];
        $request->kerja_psgn = $_POST['kerja_psgn'];
        $request->gaji_psgn = $_POST['gaji_psgn'];
        $request->kode_rusun = $_POST['ruangan'];


        $target_dir = realpath(dirname(__FILE__)) . '/assets/file/uploads/';

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["ktp_pmhn"]["name"]);
        $tmpFile = $_FILES['ktp_pmhn']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->ktp_pmhn = $target_file;
        } else {
            $request->ktp_pmhn = null;
        }

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["ktp_psgn"]["name"]);
        $tmpFile = $_FILES['ktp_psgn']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->ktp_psgn = $target_file;
        } else {
            $request->ktp_psgn = null;
        }

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["kartu_kk"]["name"]);
        $tmpFile = $_FILES['kartu_kk']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->kartu_kk = $target_file;
        } else {
            $request->kartu_kk = null;
        }

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["srt_kerja"]["name"]);
        $tmpFile = $_FILES['srt_kerja']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->srt_kerja = $target_file;
        } else {
            $request->srt_kerja = null;
        }

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["struk_gaji"]["name"]);
        $tmpFile = $_FILES['struk_gaji']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->struk_gaji = $target_file;
        } else {
            $request->struk_gaji = null;
        }

        $target_file = $target_dir . rand() . $_POST['nik_pemohon'] . rand() . basename($_FILES["srt_nikah"]["name"]);
        $tmpFile = $_FILES['srt_nikah']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->srt_nikah = $target_file;
        } else {
            $request->srt_nikah = null;
        }

        try {
            $this->pemohonService->submitHuniRusun($request);
            
            View::redirect('/huni_rusun');
        } catch (ValidationException $exception) {
            View::render('Home/huni_rusun', [
                "title" => "SI Rusun",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function portal()
    {
        View::render('Home/portal', [
            "title" => "SI Rusun"
        ]);
    }

    public function postPortalLogin() {
        $request = new UserLoginRequest();
        $request->username = $_POST['username'];
        $request->password = $_POST['password'];

        try {
            $response = $this->userService->login($request);
            $this->sessionService->create($response->user->username);

            if($response->user->status == 'admin') {
                View::redirect('/portal/admin/pelayanan');
            }
            if($response->user->status == 'user') {
                View::redirect('/portal/user/');
            }
        } catch (ValidationException $exception) {
            View::render('Home/portal', [
                "title" => "SI Rusun",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function about()
    {
        View::render('Home/about', [
            "title" => "SI Rusun"
        ]);
    }
}
