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
                <form action="/">
                    <div class="item single">
                        <p>KTP Pemohon</p>
                        <input type="tel"  name="ktp_wakil" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>KTP Pasangan</p>
                        <input type="text" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>Kartu Keluarga</p>
                        <input type="text" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                        <input type="text" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>Jumlah Penghuni</p>
                        <input type="number" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>Struk/Rincian Gaji</p>
                        <input type="text" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>
                    <div class="item single">
                        <p>Surat Nikah</p>
                        <input type="text" name="name" />
                        <button class="btn-rule" type="submit">Cetak</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="#"><button class="btn-rule" type="submit" form="kelola-pemohon">Selesai</button></a>
                <a href="portal-admin-pelayanan.html" class="btn-rule">Batal</a>
            </div>
        </div>

    </section>

    <script src="assets/js/script.js"></script>