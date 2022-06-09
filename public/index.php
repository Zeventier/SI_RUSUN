<?php

define('SITE_ROOT', realpath(dirname(__FILE__)));
require_once __DIR__ . '/../vendor/autoload.php';

use Project\App\Router;
use Project\Config\Database;
use Project\Controller\HomeController;
use Project\Middleware\MustLoginMiddleware;
use Project\Controller\PortalUserController;
use Project\Controller\PortalAdminController;
use Project\Middleware\MustNotLoginMiddleware;


Database::getConnection('prod');

// Home controller
Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/huni_rusun', HomeController::class, 'huniRusun', []);
Router::add('POST', '/huni_rusun', HomeController::class, 'postHuniRusun', []);
Router::add('GET', '/pengumuman', HomeController::class, 'pengumuman', []);
Router::add('GET', '/portal', HomeController::class, 'portal', [MustNotLoginMiddleware::class]);
Router::add('POST', '/portal', HomeController::class, 'postPortalLogin', [MustNotLoginMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about', []);

// Portal Admin
Router::add('GET', '/portal/admin', PortalAdminController::class, 'pelayanan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/home', PortalAdminController::class, 'home', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/pemberitahuan', PortalAdminController::class, 'pemberitahuan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/logout', PortalAdminController::class, 'logout', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/pelayanan', PortalAdminController::class, 'pelayanan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/pelayanan/delete', PortalAdminController::class, 'deletePemohon', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/ruangan', PortalAdminController::class, 'ruangan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/ruangan/delete', PortalAdminController::class, 'deleteRuangan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/form_ruangan', PortalAdminController::class, 'formRuangan', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/form_ruangan', PortalAdminController::class, 'postFormRuangan', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/tambah_penghuni', PortalAdminController::class, 'tambahPenghuni', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/tambah_penghuni', PortalAdminController::class, 'postTambahPenghuni', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/tagihan_penghuni', PortalAdminController::class, 'tagihanPenghuni', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/edit_tagihan', PortalAdminController::class, 'editTagihan', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/edit_tagihan', PortalAdminController::class, 'postEditTagihan', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/keluhan', PortalAdminController::class, 'keluhan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/tanggapan', PortalAdminController::class, 'tanggapan', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/tanggapan', PortalAdminController::class, 'postTanggapan', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/atur_jadwal', PortalAdminController::class, 'aturJadwal', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/atur_jadwal', PortalAdminController::class, 'postAturJadwal', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/edit_air', PortalAdminController::class, 'editAir', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/edit_air', PortalAdminController::class, 'postEditAir', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/edit_pemohon', PortalAdminController::class, 'editPemohon', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/edit_pemohon', PortalAdminController::class, 'postEditPemohon', [MustLoginMiddleware::class]);

Router::add('GET', '/portal/admin/penghuni', PortalAdminController::class, 'penghuni', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/penghuni/delete', PortalAdminController::class, 'deletePenghuni', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/admin/edit_penghuni', PortalAdminController::class, 'editPenghuni', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/admin/edit_penghuni',PortalAdminController::class, 'postEditPenghuni', [MustLoginMiddleware::class]);

// Portal User
Router::add('GET', '/portal/user', PortalUserController::class, 'beranda', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/beranda', PortalUserController::class, 'beranda', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/rusunku', PortalUserController::class, 'rusunku', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/profil', PortalUserController::class, 'profil', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/tagihan', PortalUserController::class, 'tagihan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/pemberitahuan', PortalUserController::class, 'pemberitahuan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/keluhan', PortalUserController::class, 'keluhan', [MustLoginMiddleware::class]);
Router::add('POST', '/portal/user/keluhan', PortalUserController::class, 'postKeluhan', [MustLoginMiddleware::class]);
Router::add('GET', '/portal/user/logout', PortalUserController::class, 'logout', [MustLoginMiddleware::class]);

Router::run();
