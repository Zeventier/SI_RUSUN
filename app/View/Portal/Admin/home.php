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

    <section class="rusunku" id="rusunku">

        <h1 class="heading"> Rusunku </h1>

        <div class="box-rusunku">

            <div class="box-container">
                <div class="container box">
                    <div class="image">
                        <img class="big" src="/assets/img/kelola-ruangan.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Kelola Ruang Rusun</h3>
                        <a href="/portal/admin/ruangan" class="btn">mulai
                        </a>
                    </div>

                </div>

                <div class="container box">
                    <div class="image">
                        <img class="big" src="/assets/img/kelola-tagihan.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Kelola Tagihan</h3>
                        <a href="/portal/admin/tagihan_penghuni?date=<?php echo date('Y-m') ?>" class="btn">mulai</a>
                    </div>
                </div>

                <div class="container box">
                    <div class="image">
                        <img class="big" src="/assets/img/kelola-penghuni.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Kelola Penghuni Rusun</h3>
                        <a href="/portal/admin/penghuni" class="btn">mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="fill"></div>

    <script src="js/script.js"></script>