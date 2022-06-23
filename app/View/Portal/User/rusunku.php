    <header class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="/portal/user/beranda">Beranda</a>
            <a href="/portal/user/rusunku">Rusunku</a>
            <a href="/portal/user/pemberitahuan">Pemberitahuan</a>
            <a href="/portal/user/keluhan">Keluhan</a>
            <a href="/portal/user/logout"> Logout</a>
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
                        <img class="small" src="/assets/img/tagihan.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Tagihan</h3>
                        <a href="/portal/user/tagihan?date=<?php echo date('Y-m') ?>" class="btn">mulai
                        </a>
                    </div>

                </div>

                <div class="container box">
                    <div class="image">
                        <img class="small" src="/assets/img/profile.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Profile</h3>
                        <a href="/portal/user/profil" class="btn">mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="fill"></div>

    <script src="/assets/js/script.js"></script>