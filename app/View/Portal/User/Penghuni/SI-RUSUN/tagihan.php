    <header id="not-print" class="header">
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
                            <input type="text" name="name" />
                        </div>
                    </div>
                    <div class="item">
                        <p>Keterangan</p>
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Tanggal Akhir Pembayaran</p>
                        <input type="text" name="name" readonly />
                    </div>

                    <div class="item">
                        <div class="double-item">
                            <div class="rows">
                                <p>Debit Air</p>
                                <input type="text" name="name" readonly />
                            </div>
                            <div class="rows">
                                <p>Biaya Air/bulan</p>
                                <input type="text" name="name" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p>Biaya Sewa Rusun/bulan</p>
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Total Tagihan</p>
                        <input type="text" name="name" readonly />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div>
                <button id="not-print" onclick=window.print() class=" btn-rule">Cetak</button>
                <a id="not-print" href="portal-rusunku.html" class="btn-rule">Kembali</a>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>