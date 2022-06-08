    <header class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="portal-admin-pelayanan.html">Pelayanan</a>
            <a href="portal-admin-rusunku.html">Rusunku</a>
            <a href="portal-admin-pemberitauan.html">Pemberitahuan</a>
            <a href="portal-admin-keluhan.html">Keluhan</a>
            <a href="portal-login.html"> Logout</a>
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
                        <input type="number" name="harga_awal" value="<?php echo $model['data']->harga_akhir; ?>" readonly />
                    </div>
                    <div>
                        <p>Harga Baru Air/㎥</p>
                        <input type="number" name="harga_akhir" required />
                    </div>
                    <div class="nav-rule">
                        <div></div>
                        <div>
                            <button class="btn-rule" type="submit">Ubah</button>
                            <a href="/portal/admin/tagihan_penghuni?date=<?php echo date('Y-m') ?>" class="btn-rule">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>