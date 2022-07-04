    <header class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="/portal/admin">Pelayanan</a>
            <a href="/portal/admin/home">Rusunku</a>
            <a href="/portal/admin/pemberitahuan">Pemberitahuan</a>
            <a href="/portal/admin/keluhan?date=<?php echo date('Y-m') ?>">Keluhan</a>
            <a href="/portal/admin/logout"> Logout</a>
        </nav>

        <div class="icons">
            <div id="portal-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="form-input">
        <form method="post" action="/portal/admin/berkas_pemohon?id_pengumuman=<?php echo $_GET['id_pengumuman'] ?>" enctype="multipart/form-data">
            <div>
                <h1 class="heading"> Kelola Berkas Data Pemohon</h1>
            </div>

            <div class="rule">
                <div class="list">
                    <div class="item single-input">
                        <p>KTP Pemohon</p>
                        <input type="text" value="<?php echo $model['data']->ktp_pmhn ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="ktp_pmhn" />
                        <div class="container1">
                            <a href="/<?php echo $model['data']->ktp_pmhn ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                    <div class="item single-input">
                        <p>KTP Pasangan</p>
                        <input type="text" value="<?php echo $model['data']->ktp_psgn ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="ktp_psgn" />
                        <div class="container2">
                            <a href="/<?php echo $model['data']->ktp_psgn ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                    <div class="item single-input">
                        <p>Kartu Keluarga</p>
                        <input type="text" value="<?php echo $model['data']->kartu_kk ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="kartu_kk" />
                        <div class="container3">
                            <a href="/<?php echo $model['data']->kartu_kk ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                    <div class="item single-input">
                        <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                        <input type="text" value="<?php echo $model['data']->srt_kerja ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="srt_kerja" />
                        <div class="container4">
                            <a href="/<?php echo $model['data']->srt_kerja ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                    <div class="item single-input">
                        <p>Struk/Rincian Gaji</p>
                        <input type="text" value="<?php echo $model['data']->struk_gaji ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="struk_gaji" />
                        <div class="container5">
                            <a href="/<?php echo $model['data']->struk_gaji ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                    <div class="item single-input">
                        <p>Surat Nikah</p>
                        <input type="text" value="<?php echo $model['data']->srt_nikah ?? ''; ?>" disabled />
                        <input type="file" accept="image/*" name="srt_nikah" />
                        <div class="container6">
                            <a href="/<?php echo $model['data']->srt_nikah ?? ''; ?>">
                                <button class="modal-display">Lihat</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-rule">
                <p></p>
                <div>
                    <button class="btn-success" type="submit">Upload</button>
                    <a href="/portal/admin" class="btn-rule">Kembali</a>
                </div>
            </div>
        </form>
    </section>

    <script src="/assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.querySelector('.container1'));
        lightGallery(document.querySelector('.container2'));
        lightGallery(document.querySelector('.container3'));
        lightGallery(document.querySelector('.container4'));
        lightGallery(document.querySelector('.container5'));
        lightGallery(document.querySelector('.container6'));
    </script>