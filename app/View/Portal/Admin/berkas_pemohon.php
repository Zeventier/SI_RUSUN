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
        <div>
            <h1 class="heading"> Kelola Berkas Data Pemohon</h1>
        </div>

        <div class="rule">
            <div class="list">
                <div class="item single-input">
                    <p>KTP Pemohon</p>
                    <input type="text" value="<?php echo $model['data']->ktp_pmhn ?? ''; ?>" name="ktp_wakil" />
                    <div class="container1">
                        <a href="/<?php echo $model['data']->ktp_pmhn ?? ''; ?>">
                            <button class="modal-display">Lihat</button>
                        </a>
                    </div>
                </div>

                <div class="item single-input">
                    <p>KTP Pasangan</p>
                    <input type="text" value="<?php echo $model['data']->ktp_psgn ?? ''; ?>" name="name" />
                    <div class="container2">
                        <a href="/<?php echo $model['data']->ktp_psgn ?? ''; ?>">
                            <button class="modal-display">Lihat</button>
                        </a>
                    </div>
                </div>

                <div class="item single-input">
                    <p>Kartu Keluarga</p>
                    <input type="text" value="<?php echo $model['data']->kartu_kk ?? ''; ?>" name="name" />
                    <div class="container3">
                        <a href="/<?php echo $model['data']->kartu_kk ?? ''; ?>">
                            <button class="modal-display">Lihat</button>
                        </a>
                    </div>
                </div>

                <div class="item single-input">
                    <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                    <input type="text" value="<?php echo $model['data']->srt_kerja ?? ''; ?>" name="name" />
                    <div class="container4">
                        <a href="/<?php echo $model['data']->srt_kerja ?? ''; ?>">
                            <button class="modal-display">Lihat</button>
                        </a>
                    </div>
                </div>

                <div class="item single-input">
                    <p>Struk/Rincian Gaji</p>
                    <input type="text" value="<?php echo $model['data']->struk_gaji ?? ''; ?>" name="name" />
                    <div class="container5">
                        <a href="/<?php echo $model['data']->struk_gaji ?? ''; ?>">
                            <button class="modal-display">Lihat</button>
                        </a>
                    </div>
                </div>

                <div class="item single-input">
                    <p>Surat Nikah</p>
                    <input type="text" value="<?php echo $model['data']->srt_nikah ?? ''; ?>" name="name" />
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
                <a href="/portal/admin" class="btn-rule">Kembali</a>
            </div>
        </div>

        <!-- <div id="Modal1" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->srt_nikah ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->srt_nikah ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="Modal2" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->ktp_psgn ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->ktp_psgn ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="Modal3" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->kartu_kk ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->kartu_kk ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="Modal4" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->srt_kerja ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->srt_kerja ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="Modal5" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->struk_gaji ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->struk_gaji ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="Modal6" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->srt_nikah ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->srt_nikah ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div> -->

    </section>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.querySelector('.container1'));
        lightGallery(document.querySelector('.container2'));
        lightGallery(document.querySelector('.container3'));
        lightGallery(document.querySelector('.container4'));
        lightGallery(document.querySelector('.container5'));
        lightGallery(document.querySelector('.container6'));
    </script>