    <header id="not-print" class="header">
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
            <h1 class="heading"> Informasi Tagihan Bulanan</h1>
        </div>
        <form method="get" class="of" action="/portal/user/tagihan">
            <div class="nav-rule">
                <div class="form-input">
                    <div class="list">
                        <div class="bulan">
                            <p>Pilih Waktu</p>
                            <input type="month" name="date" />
                        </div>
                    </div>
                </div>
                <div id="not-print">
                    <button type="submit" class="btn-success">Pilih</button>
                </div>
            </div>
        </form>
        <div id="print" class="rule">
            <div class="list">
                <form>
                    <?php if ($model['data'] != null) { ?>
                        <div class="item">
                            <p>Username</p>
                            <div class="item">
                                <input class="disable-print" type="text" value="<?php echo $model['data']->username ?? "" ?>" name="username" readonly />
                            </div>
                        </div>
                        <div class="item">
                            <p>Keterangan</p>
                            <input class="disable-print" type="text" value="<?php echo $model['data']->keterangan ?? "" ?>" name="keterangan" readonly />
                        </div>
                        <div class="item">
                            <p>Tanggal Akhir Pembayaran</p>
                            <input class="disable-print" type="text" value="<?php echo $model['data']->deadline ?? "" ?>" name="deadline" readonly />
                        </div>

                        <div class="item">
                            <div class="double-item">
                                <div class="rows">
                                    <p>Debit Air</p>
                                    <input class="disable-print" type="text" value="<?php echo $model['data']->debit_air ?? "" ?>" name="debit_air" readonly />
                                </div>
                                <div class="rows">
                                    <p>Biaya Air/bulan</p>
                                    <input class="disable-print" type="text" value="<?php echo $model['air'][0]['harga_akhir'] ?? "" ?>" name="air" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p>Biaya Sewa Rusun/bulan</p>
                            <input class="disable-print" type="text" value="<?php echo $model['data']->sewa_rusun ?? "" ?>" name="sewa_rusun" readonly />
                        </div>
                        <div class="item">
                            <p>Total Tagihan</p>
                            <input class="disable-print" type="text" value="<?php echo ($model['data']->sewa_rusun + $model['data']->debit_air * $model['air'][0]['harga_akhir']) ?>" name="total" readonly />
                        </div>
                    <?php } else { ?>
                        <div class="item">
                            <p>Tidak ada tagihan pada bulan dan tahun ini!</p>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div>
                <button id="not-print" onclick=window.print() class=" btn-success">Cetak</button>
                <a id="not-print" href="/portal/user/rusunku" class="btn-rule">Kembali</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>