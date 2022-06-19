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
        <div id="print" class="rule">
            <div class="list">
                <form action="/">
                    <div class="item">
                        <p>Bulan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <div class="item">
                            <input type="text" value="<?php echo $model['data']->username ?? "" ?>" name="username" readonly />
                        </div>
                    </div>
                    <div class="item">
                        <p>Keterangan</p>
                        <input type="text" value="<?php echo $model['data']->keterangan ?? "" ?>" name="keterangan" readonly />
                    </div>
                    <div class="item">
                        <p>Tanggal Akhir Pembayaran</p>
                        <input type="text" value="<?php echo $model['data']->deadline ?? "" ?>" name="deadline" readonly />
                    </div>

                    <div class="item">
                        <div class="double-item">
                            <div class="rows">
                                <p>Debit Air</p>
                                <input type="text" value="<?php echo $model['data']->debit_air ?? "" ?>" name="debit_air" readonly />
                            </div>
                            <div class="rows">
                                <p>Biaya Air/bulan</p>
                                <input type="text" value="<?php echo $model['air'][0]['harga_akhir'] ?? "" ?>" name="air" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p>Biaya Sewa Rusun/bulan</p>
                        <input type="text" value="<?php echo $model['data']->sewa_rusun ?? "" ?>" name="sewa_rusun" readonly />
                    </div>
                    <div class="item">
                        <p>Total Tagihan</p>
                        <input type="text" value="<?php echo ($model['data']->sewa_rusun + $model['data']->debit_air * $model['air'][0]['harga_akhir']) ?>" name="total" readonly />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div>
                <button id="not-print" onclick=window.print() class=" btn-rule">Cetak</button>
                <a id="not-print" href="/portal/user/rusunku" class="btn-rule">Kembali</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>