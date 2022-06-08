    <header class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="portal-rusun.html">Beranda</a>
            <a href="portal-rusunku.html">Rusunku</a>
            <a href="portal-pemberitahuan.html">Pemberitahuan</a>
            <a href="portal-keluhan.html">Keluhan</a>
            <a href="portal-login.html"> Logout</a>
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
                                <textarea rows="5" name="comment"
                                    form="usrform">Masukan Keluhan Anda Disini....</textarea>
                            </form>
                        </div>
                    </div>

                    <div class="nav-rule">
                        <div></div>
                        <div>
                            <a href="#"><button class="btn-rule" type="submit" form="keluhan">Simpan</button></a>
                            <a href="portal-rusun.html" class="btn-rule">Batal</a>
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
    
    <script src="js/script.js"></script>
