<?php

namespace Project\Controller;

use Project\App\View;
use Project\Domain\Air;
use Project\Domain\Sewa;
use Project\Domain\Rusun;
use Project\Domain\Keluhan;
use Project\Config\Database;
use Project\Domain\Tanggapan;
use Project\Service\AirService;
use Project\Service\SewaService;
use Project\Service\UserService;
use Project\Model\PemohonRequest;
use Project\Service\RusunService;
use Project\Model\PenghuniRequest;
use Project\Model\UserEditRequest;
use Project\Service\KeluhanService;
use Project\Service\PemohonService;
use Project\Service\SessionService;
use Project\Model\AturJadwalRequest;
use Project\Service\PenghuniService;
use Project\Repository\AirRepository;
use Project\Service\TanggapanService;
use Project\Model\UserRegisterRequest;
use Project\Repository\SewaRepository;
use Project\Repository\UserRepository;
use Project\Service\PengumumanService;
use Project\Repository\RusunRepository;
use Project\Repository\BerkasRepository;
use Project\Repository\KeluhanRepository;
use Project\Repository\PemohonRepository;
use Project\Repository\SessionRepository;
use Project\Exception\ValidationException;
use Project\Repository\PenghuniRepository;
use Project\Repository\TanggapanRepository;
use Project\Repository\PengumumanRepository;

class PortalAdminController
{
    private SessionService $sessionService;
    private UserService $userService;
    private PemohonService $pemohonService;
    private PengumumanService $pengumumanService;
    private PenghuniService $penghuniService;
    private RusunService $rusunService;
    private SewaService $sewaService;
    private AirService $airService;
    private KeluhanService $keluhanService;
    private TanggapanService $tanggapanService;
    

    public function __construct()
    {
        $connection = Database::getConnection();
        $sessionRepository = new SessionRepository($connection);
        $userRepository = new UserRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);

        $userRepository = new UserRepository($connection);
        $this->userService = new UserService($userRepository);

        $pengumumanRepository = new PengumumanRepository($connection);
        $pemohonRepository = new PemohonRepository($connection);
        $this->pengumumanService = new PengumumanService($pengumumanRepository, $pemohonRepository);

        $pemohonRepository = new PemohonRepository($connection);
        $berkasRepository = new BerkasRepository($connection);
        $pengumumanRepository = new PengumumanRepository($connection);
        $this->pemohonService = new PemohonService($pemohonRepository, $berkasRepository, $pengumumanRepository);

        $rusunRepository = new RusunRepository($connection);
        $this->rusunService = new RusunService($rusunRepository);

        $penghuniRepository = new PenghuniRepository($connection);
        $this->penghuniService = new PenghuniService($penghuniRepository, $userRepository, $pengumumanRepository, $rusunRepository);

        $sewaRepository = new SewaRepository($connection);
        $this->sewaService = new SewaService($sewaRepository);

        $airRepository = new AirRepository($connection);
        $this->airService = new AirService($airRepository);

        $keluhanRepository = new KeluhanRepository($connection);
        $this->keluhanService = new KeluhanService($keluhanRepository);

        $tanggapanRepository = new TanggapanRepository($connection);
        $this->tanggapanService = new TanggapanService($tanggapanRepository);
    }

    public function home()
    {
        View::render('Portal/Admin/home', [
            'title' => 'Portal Rusun Admin'
        ]);
    }

    public function pelayanan()
    {
        $daftarPemohon = $this->pengumumanService->showDaftarPemohon();

        View::render('Portal/Admin/pelayanan', [
            'title' => 'Portal Rusun Admin',
            'data' => $daftarPemohon
        ]);
    }

    public function editPemohon()
    {
        $id_pengumuman = $_GET['id_pengumuman'];
        $dataPemohon = $this->pemohonService->showPemohon($id_pengumuman);
        $daftarRuangan = $this->rusunService->showDaftarRuangan();

        View::render('Portal/Admin/edit_pemohon', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataPemohon,
            'ruangan' => $daftarRuangan
        ]);
    }

    public function kelolaPemohon()
    {
        $id_pengumuman = $_GET['id_pengumuman'];
        $dataPemohon = $this->pemohonService->showPemohon($id_pengumuman);

        View::render('Portal/Admin/kelola_pemohon', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataPemohon
        ]);
    }

    public function postEditPemohon()
    {
        $id_pengumuman = $_GET['id_pengumuman'];

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

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["ktp_pmhn"]["name"]);
        $tmpFile = $_FILES['ktp_pmhn']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->ktp_pmhn = $target_file;
        } else {
            $request->ktp_pmhn = null;
        }

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["ktp_psgn"]["name"]);
        $tmpFile = $_FILES['ktp_psgn']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->ktp_psgn = $target_file;
        } else {
            $request->ktp_psgn = null;
        }

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["kartu_kk"]["name"]);
        $tmpFile = $_FILES['kartu_kk']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->kartu_kk = $target_file;
        } else {
            $request->kartu_kk = null;
        }

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["srt_kerja"]["name"]);
        $tmpFile = $_FILES['srt_kerja']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->srt_kerja = $target_file;
        } else {
            $request->srt_kerja = null;
        }

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["struk_gaji"]["name"]);
        $tmpFile = $_FILES['struk_gaji']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->struk_gaji = $target_file;
        } else {
            $request->struk_gaji = null;
        }

        $target_dir = "/assets/file/uploads/";
        $target_file = $target_dir . $_POST['nik_pemohon'] . basename($_FILES["srt_nikah"]["name"]);
        $tmpFile = $_FILES['srt_nikah']['tmp_name'];

        $upload = move_uploaded_file($tmpFile, $target_file);

        if ($upload) {
            $request->srt_nikah = $target_file;
        } else {
            $request->srt_nikah = null;
        }

        try {
            $this->pemohonService->editPemohon($id_pengumuman, $request);
            
            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/edit_pemohon', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function tolakPemohon()
    {
        $pengumuman_id = $_GET['id'];

        try {
            $this->pengumumanService->tolakPemohon($pengumuman_id);

            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/pelayanan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }


    public function deletePemohon()
    {
        $pengumuman_id = $_GET['id'];

        try {
            $this->pengumumanService->deletePemohon($pengumuman_id);

            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/pelayanan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function aturJadwal()
    {
        $id_pengumuman = $_GET['id'];

        $jadwal = $this->pengumumanService->getJadwal($id_pengumuman);
        $jadwal->t_wawancara = date('Y-m-d\TH:i:s', strtotime($jadwal->t_wawancara));
        $jadwal->t_hasil = date('Y-m-d\TH:i:s', strtotime($jadwal->t_hasil));

        View::render('Portal/Admin/atur_jadwal', [
            'title' => 'Portal Rusun Admin',
            'jadwal' => $jadwal
        ]);
    }

    public function postAturJadwal() 
    {
        $request = new AturJadwalRequest();

        $id_pengumuman = $_GET['id'];
        $t_wawancara = $_POST['t_wawancara'];
        $t_hasil = $_POST['t_hasil'];

        $request->pengumuman_id = $_GET['id'];
        $request->t_wawancara = date("Y-m-d H:i:s", strtotime($t_wawancara));
        $request->t_hasil = date("Y-m-d H:i:s", strtotime($t_hasil));

        try {
            $this->pengumumanService->aturJadwal($id_pengumuman, $request);

            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/pelayanan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function pemberitahuan()
    {
        View::render('Portal/Admin/pemberitahuan', [
            'title' => 'Portal Rusun Admin'
        ]);
    }

    public function keluhan()
    {
        $year = date('Y', strtotime($_GET['date']));
        $month = date('m', strtotime($_GET['date']));

        $daftarKeluhan = $this->keluhanService->showDaftarKeluhanMY($year, $month);

        View::render('Portal/Admin/keluhan', [
            'title' => 'Portal Rusun Admin',
            'data' => $daftarKeluhan
        ]);
    }

    public function tanggapan()
    {
        $id_keluhan = $_GET['id_keluhan'];

        $keluhan = new Keluhan();

        $keluhan = $this->keluhanService->showKeluhan($id_keluhan);

        View::render('Portal/Admin/tanggapan', [
            'title' => 'Portal Rusun Admin',
            'data' => $keluhan
        ]);
    }

    public function postTanggapan()
    {
        date_default_timezone_set("Asia/Makassar");

        $tanggapan = new Tanggapan();
        $tanggapan->waktu = date("Y-m-d H:i:s");
        $tanggapan->tanggapan = $_POST["tanggapan"];
        $tanggapan->id_keluhan = $_GET['id_keluhan'];

        try {
            $this->tanggapanService->addTanggapan($tanggapan);

            View::redirect('/portal/admin/keluhan?date='. date('Y-m'));
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/tanggapan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function tambahPenghuni()
    {
        $id_pengumuman = $_GET['id_pengumuman'];
        $dataPemohon = $this->pemohonService->showPemohon($id_pengumuman);
        $daftarRuangan = $this->rusunService->showDaftarRuangan();

        View::render('Portal/Admin/tambah_penghuni', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataPemohon,
            'ruangan' => $daftarRuangan
        ]);
    }

    public function postTambahPenghuni()
    {
        $id_pengumuman = $_GET['id_pengumuman'];
        $request = new PenghuniRequest();
        $userRequest = new UserRegisterRequest();

        $request->nama_wakil = $_POST['nama_wakil'];
        $request->nik_wakil = $_POST['nik_wakil'];
        $request->nomor_kk = $_POST['no_kk'];
        $request->kerja_wakil = $_POST['kerja_wakil'];
        $request->gaji_wakil = $_POST['gaji_wakil'];
        $request->jlh_penghuni = $_POST['jlh_penghuni'];
        $request->nama_psgn = $_POST['nama_psgn'];
        $request->kerja_psgn = $_POST['kerja_psgn'];
        $request->gaji_psgn = $_POST['gaji_psgn'];
        $request->tgl_huni = $_POST['tgl_huni'];
        $request->username = $_POST['username'];
        $request->password = $_POST['password'];
        $request->kode_rusun = $_POST['ruangan'];

        $userRequest->username = $_POST['username'];
        $userRequest->password = $_POST['password'];
        $userRequest->status = 'user';

        try {
            $this->userService->register($userRequest);
            $this->penghuniService->addPenghuni($request, $id_pengumuman);

            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/pelayanan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function tagihanPenghuni()
    {
        $year = date('Y', strtotime($_GET['date']));
        $month = date('m', strtotime($_GET['date']));

        $daftarTagihan = $this->sewaService->showDaftarTagihanMY($year, $month);
        $air = $this->airService->getHargaAir();

        View::render('Portal/Admin/tagihan_penghuni', [
            'title' => 'Portal Rusun Admin',
            'data' => $daftarTagihan,
            'air' => $air
        ]);
    }

    public function editTagihan()
    {
        $id_tagihan = $_GET['id_tagihan'];
        $dataTagihan = $this->sewaService->showTagihan($id_tagihan);

        View::render('Portal/Admin/edit_tagihan', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataTagihan
        ]);
    }

    public function postEditTagihan()
    {
        $tagihan = new Sewa();

        $tagihan->id_sewa = $_GET['id_tagihan'];
        $tagihan->sewa_rusun = $_POST['sewa_rusun'];
        $tagihan->debit_air = $_POST['debit_air'];
        $tagihan->keterangan = $_POST['keterangan'];
        $tagihan->deadline = $_POST['deadline'];
        $tagihan->username = $_POST['username'];

        try {
            $this->sewaService->editTagihan($tagihan);

            View::redirect('/portal/admin/tagihan_penghuni');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/edit_tagihan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function editAir()
    {
        $id_air = $_GET['id_air'];

        $dataAir = $this->airService->showHargaAir($id_air);

        View::render('Portal/Admin/edit_air', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataAir
        ]);
    }

    public function postEditAir()
    {
        $air = new Air();

        $air->id_air = $_GET['id_air'];
        $air->harga_awal = $_POST['harga_awal'];
        $air->harga_akhir = $_POST['harga_akhir'];

        try {
            $this->airService->editHargaAir($air);

            View::redirect('/portal/admin/tagihan_penghuni?date=' . date('Y-m'));
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/edit_air', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function ruangan()
    {
        $daftarRuangan = $this->rusunService->showDaftarRuangan();

        View::render('Portal/Admin/ruangan', [
            'title' => 'Portal Rusun Admin',
            'data' => $daftarRuangan
        ]);
    }

    public function formRuangan()
    {
        $dataRuangan = new Rusun();
    
        if(isset($_GET['kode_ruangan'])) {
            $kode_ruangan = $_GET['kode_ruangan'];
            $dataRuangan = $this->rusunService->showRuangan($kode_ruangan);
        }

        View::render('Portal/Admin/form_ruangan', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataRuangan
        ]);
    }

    public function postFormRuangan()
    {
        $ruangan = new Rusun();
        $ruangan->no_ruang = $_POST['no_ruangan'];
        $ruangan->lantai = $_POST['lantai'];
        $ruangan->keterangan = $_POST['keterangan'];

        if(isset($_GET['kode_ruangan'])) {
            try {
                $kode_ruangan = $_GET['kode_ruangan'];

                $this->rusunService->editRuangan($kode_ruangan, $ruangan);

                View::redirect('/portal/admin/ruangan');
            } catch (ValidationException $exception) {
                View::render('Portal/Admin/form_ruangan', [
                    "title" => "Portal Rusun Admin",
                    'error' => $exception->getMessage()
                ]);
            }
        }
        else {
            try {
                $this->rusunService->addRuangan($ruangan);

                View::redirect('/portal/admin/ruangan');
            } catch (ValidationException $exception) {
                View::render('Portal/Admin/form-ruangan', [
                    "title" => "Portal Rusun Admin",
                    'error' => $exception->getMessage()
                ]);
            }
        }
    }

    public function deleteRuangan()
    {
        $kode_ruangan = $_GET['kode_ruangan'];

        try {
            $this->rusunService->deleteRuangan($kode_ruangan);

            View::redirect('/portal/admin/ruangan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/ruangan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    } 

    public function penghuni()
    {
        $daftarPenghuni = $this->penghuniService->showDaftarPenghuni();

        View::render('Portal/Admin/penghuni', [
            'title' => 'Portal Rusun Admin',
            'data' => $daftarPenghuni
        ]);
    }

    public function editPenghuni()
    {
        $id_penghuni = $_GET['id_penghuni'];
        $dataPenghuni = $this->penghuniService->showPenghuni($id_penghuni);

        View::render('Portal/Admin/edit_penghuni', [
            'title' => 'Portal Rusun Admin',
            'data' => $dataPenghuni
        ]);
    }

    public function postEditPenghuni()
    {
        $id_penghuni = $_GET['id_penghuni'];
        $username = $_POST['username'];

        $request = new PenghuniRequest();
        $userRequest = new UserEditRequest();

        $request->nama_wakil = $_POST['nama_wakil'];
        $request->nik_wakil = $_POST['nik_wakil'];
        $request->nomor_kk = $_POST['no_kk'];
        $request->kerja_wakil = $_POST['kerja_wakil'];
        $request->gaji_wakil = $_POST['gaji_wakil'];
        $request->jlh_penghuni = $_POST['jlh_penghuni'];
        $request->nama_psgn = $_POST['nama_psgn'];
        $request->kerja_psgn = $_POST['kerja_psgn'];
        $request->gaji_psgn = $_POST['gaji_psgn'];
        $request->tgl_huni = $_POST['tgl_huni'];
        $request->username = $_POST['username'];
        $request->kode_rusun = $_POST['ruangan'];

        $userRequest->password = $_POST['password'];
        $userRequest->status = 'user';

        try {
            $this->userService->editUser($username, $userRequest);
            $this->penghuniService->addPenghuni($id_penghuni, $request);

            View::redirect('/portal/admin/pelayanan');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/pelayanan', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function deletePenghuni()
    {
        $id_penghuni = $_GET['id_penghuni'];

        try {
            $this->penghuniService->deletePenghuni($id_penghuni);

            View::redirect('/portal/admin/penghuni');
        } catch (ValidationException $exception) {
            View::render('Portal/Admin/penghuni', [
                "title" => "Portal Rusun Admin",
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function logout()
    {
        $this->sessionService->destroy();
        View::redirect("/");
    }
}
