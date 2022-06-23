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
            <h1 class="heading"> Kelola Data Pemohon</h1>
        </div>

        <div class="rule">
            <div class="list">
                <div class="item single-input">
                    <p>KTP Pemohon</p>
                    <input type="text" value="<?php echo $model['data']->ktp_pmhn ?? ''; ?>" name="ktp_wakil" />
                    <button class="btn-warning">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>KTP Pasangan</p>
                    <input type="text" value="<?php echo $model['data']->ktp_psgn ?? ''; ?>" name="name" />
                    <button class="btn-warning">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Kartu Keluarga</p>
                    <input type="text" value="<?php echo $model['data']->kartu_kk ?? ''; ?>" name="name" />
                    <button class="btn-warning">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                    <input type="text" value="<?php echo $model['data']->srt_kerja ?? ''; ?>" name="name" />
                    <button class="btn-warning">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Struk/Rincian Gaji</p>
                    <input type="text" value="<?php echo $model['data']->struk_gaji ?? ''; ?>" name="name" />
                    <button class="btn-warning">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Surat Nikah</p>
                    <input type="text" value="<?php echo $model['data']->srt_nikah ?? ''; ?>" name="name" />
                    <button class="btn-warning">Cetak</button>
                </div>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="/portal/admin" class="btn-rule">Kembali</a>
            </div>
        </div>

    </section>

    <script src="assets/js/script.js"></script>