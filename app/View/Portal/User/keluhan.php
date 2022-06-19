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
                <div class="item">
                    <p>Keluhan</p>
                    <div class="item">
                        <form method="post" action="/portal/user/keluhan">
                            <textarea rows="5" name="keluhan">Masukan Keluhan Anda Disini....</textarea>
                            <div class="nav-rule">
                                <div></div>
                                <div>
                                    <button class="btn-rule" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="rule">
                    <div class="list">
                        <div class="item">
                            <?php if (isset($model['data'])) {
                                foreach ($model['data'] as $value) {
                            ?>
                                    <p>Keluhan</p>
                                    <textarea rows="5" name="keluhan" readonly><?php echo $value['keluhan']; ?></textarea>
                                    <p>Tanggapan</p>
                                    <textarea rows="5" name="tanggapan" readonly><?php echo $value['tanggapan']; ?></textarea>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>