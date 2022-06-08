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
                <form action="/">
                    <div>
                        <p>Harga Awal Air/㎥</p>
                        <input type="number" name="name" readonly />
                    </div>
                    <div>
                        <p>Harga Baru Air/㎥</p>
                        <input type="number" name="name" required />
                    </div>
                </form>
            </div>
        </div>
        <div class="nav-rule">
            <div></div>
            <div>
                <a href=""><button class="btn-rule" type="submit">Ubah</button></a>
                <a href="portal-admin-tagihan-penghuni.html" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>