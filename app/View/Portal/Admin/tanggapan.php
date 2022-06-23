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
                        <textarea rows="10" cols="170" name="keluhan" readonly><?php echo $model['data']->keluhan; ?></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/tanggapan?id_keluhan=<?php echo $_GET['id_keluhan']; ?>">
                    <div class="item">
                        <p> Masukan Tanggapan Anda Disini ....</p>
                        <textarea rows="4" cols="170" name="tanggapan"></textarea>
                    </div>

                    <div class="nav-rule">
                        <div>
                            <button class=" btn-success" type="submit">Kirim</button>
                            <button onclick="location.href='/portal/admin/keluhan?date=<?php echo date('Y-m') ?>'" class="btn-rule">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>