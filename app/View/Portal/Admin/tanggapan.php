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
            <h1 class="heading">Kirim Tanggapan</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/">
                    <div class="item">
                        <p>Keluhan</p>
                        <textarea rows="10" cols="170" name="comment" form="usrform" readonly></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/">
                    <div class="item">
                        <textarea rows="4" cols="170" name="comment"> Masukan Tanggapan Anda Disini ....</textarea>
                    </div>

                    <div class="nav-rule">
                        <div>
                            <a href="#"><button class=" btn-rule" type="submit">Kirim</button> </a>
                            <a href="portal-admin-keluhan.html" class="btn-rule">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>