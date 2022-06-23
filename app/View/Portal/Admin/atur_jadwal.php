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
            <h1 class="heading"> Atur Jadwal</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/atur_jadwal?id=<?php echo $_GET["id"]; ?>" id="atur-jadwal">
                    <div class="single">
                        <p>Tanggal Wawancara</p>
                        <input type="datetime-local" min="2022-01-01T00:00" value="<?php echo $model['jadwal']->t_wawancara ?? '';  ?>" name="t_wawancara" required />
                    </div>
                    <div class="single">
                        <p>Waktu Pengumuman</p>
                        <input type="datetime-local" min="2022-01-01T00:00" value="<?php echo $model['jadwal']->t_hasil ?? '';  ?>" name="t_hasil" required />
                    </div>
                    <div class="nav-rule">
                        <div></div>
                        <div>
                            <button class="btn-success" type="submit" form="atur-jadwal">Atur Jadwal</button>
                            <button onclick="location.href='/portal/admin/pelayanan'" class="btn-rule">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>