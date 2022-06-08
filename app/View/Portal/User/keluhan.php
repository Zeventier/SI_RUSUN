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
    <section class="form-input">
        <div>
            <h1 class="heading"> Username - Kode Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/">
                    <div class="item">
                        <p>Keluhan</p>
                        <div class="item" id="keluhan">
                            <form action="">
                                <textarea rows="5" name="comment" form="usrform">Masukan Keluhan Anda Disini....</textarea>
                            </form>
                        </div>
                    </div>

                    <div class="nav-rule">
                        <div></div>
                        <div>
                            <button class="btn-rule" type="submit" form="keluhan">Simpan</button>
                            <button href="portal-rusun.html" class="btn-rule">Batal</button>
                        </div>
                    </div>

                    <div class="rule">
                        <div class="list">
                            <form action="/">
                                <div class="item">
                                    <p>Keluhan</p>
                                    <textarea rows="5" name="comment" form="usrform" readonly></textarea>
                                    <p>Tanggapan</p>
                                    <textarea rows="5" name="comment" form="usrform" readonly></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>