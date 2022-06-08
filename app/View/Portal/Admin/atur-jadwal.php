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
                <form action="/" id="atur-jadwal">
                    <div class="single-item">
                        <p>Tanggal Wawancara</p>
                        <input type="date" name="name" required />
                        <input type="time" name="name" required />
                    </div>
                    <div class="single-item">
                        <p>Waktu Pengumuman</p>
                        <input type="date" name="name" required />
                        <input type="time" name="name" required />
                    </div>
                </form>
            </div>
        </div>
        <div class="nav-rule">
            <div></div>
            <div>
                <a href="#"><button class="btn-rule" type="submit" form="atur-jadwal">Atur Jadwal</button></a>
                <a href="portal-admin-pelayanan.html" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>