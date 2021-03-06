<?php

namespace Project\Controller;

use Project\App\View;
use Project\Config\Database;
use Project\Domain\Pengumuman;
use Project\Service\UserService;
use Project\Model\PemohonRequest;
use Project\Service\RusunService;
use Project\Model\UserLoginRequest;
use Project\Service\PemohonService;
use Project\Service\SessionService;
use Project\Repository\UserRepository;
use Project\Service\PengumumanService;
use Project\Repository\RusunRepository;
use Project\Repository\BerkasRepository;
use Project\Repository\PemohonRepository;
use Project\Repository\SessionRepository;
use Project\Exception\ValidationException;
use Project\Repository\PenghuniRepository;
use Project\Repository\PengumumanRepository;

class HomeController
{
    private UserService $userService;
    private SessionService $sessionService;
    private PemohonService $pemohonService;
    private RusunService $rusunService;
    private PengumumanService $pengumumanService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $userRepository = new UserRepository($connection);
        $this->userService = new UserService($userRepository);

        $rusunRepository = new RusunRepository($connection);
        $this->rusunService = new RusunService($rusunRepository);

        $sessionRepository = new SessionRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);

        $pemohonRepository = new PemohonRepository($connection);
        $berkasRepository = new BerkasRepository($connection);
        $pengumumanRepository = new PengumumanRepository($connection);
        $this->pemohonService = new PemohonService($pemohonRepository, $berkasRepository, $pengumumanRepository);

        $penghuniRepository = new PenghuniRepository($connection);
        $this->pengumumanService = new PengumumanService($pengumumanRepository, $pemohonRepository, $berkasRepository, $penghuniRepository, $rusunRepository);
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

    public function postPengumuman()
    {
        $pengumuman = new Pengumuman();
        $pengumuman->nama_pemohon = $_POST['nama_pemohon'];
        $pengumuman->nik_pemohon = $_POST['nik_pemohon'];

        $response = $this->pengumumanService->showPengumuman($pengumuman->nama_pemohon, $pengumuman->nik_pemohon);

        if ($response->pengumuman == null) {
            // This is in the PHP file and sends a Javascript alert to the client
            $message = "Nama atau NIK tidak ada";
            echo "<script type='text/javascript'>alert('$message'); window.location = '/pengumuman';</script>";
        } else {
            $response->pengumuman->t_wawancara = date('Y-m-d\TH:i:s', strtotime($response->pengumuman->t_wawancara));
            $response->pengumuman->t_hasil = date('Y-m-d\TH:i:s', strtotime($response->pengumuman->t_hasil));

            View::render('Home/hasil_pengumuman', [
                "title" => "SI Rusun",
                'data' => $response
            ]);
        }
    }

    public function huniRusun()
    {
        $daftarRuangan = $this->rusunService->showDaftarRuangan();

        View::render('Home/huni_rusun', [
            "title" => "SI Rusun",
            'ruangan' => $daftarRuangan
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


        $target_dir = 'assets/file/uploads/';

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

            // View::redirect('/huni_rusun');

            // This is in the PHP file and sends a Javascript alert to the client
            $message = "Permohonan anda telah berhasil diajukan";
            echo "<script type='text/javascript'>alert('$message'); window.location = '/huni_rusun';</script>";
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

    public function postPortalLogin()
    {
        $request = new UserLoginRequest();
        $request->username = $_POST['username'];
        $request->password = $_POST['password'];

        try {
            $response = $this->userService->login($request);
            $this->sessionService->create($response->user->username);

            if ($response->user->status == 'admin') {
                View::redirect('/portal/admin/pelayanan');
            }
            if ($response->user->status == 'user') {
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
