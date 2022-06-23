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
            <h1 class="heading"> Kelola Harga Air</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/edit_air?id_air=<?php echo $_GET["id_air"]; ?>">
                    <div>
                        <p>Harga Awal Air/㎥</p>
                        <input title="Tidak Dapat Dirubah" type="text" class="disable" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" name="harga_awal" value="<?php echo $model['data']->harga_akhir; ?>" readonly />
                    </div>
                    <div>
                        <p>Harga Baru Air/㎥</p>
                        <input type="text" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" name="harga_akhir" required />
                    </div>
                    <div class="nav-rule">
                        <div></div>
                        <div>
                            <button class="btn-success" type="submit">Ubah</button>
                            <button onclick="location.href='/portal/admin/tagihan_penghuni?date=<?php echo date('Y-m') ?>'" class="btn-rule">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>