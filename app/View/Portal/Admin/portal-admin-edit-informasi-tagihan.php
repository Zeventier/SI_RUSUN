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
            <h1 class="heading">Edit Informasi Tagihan</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="edit-informasi">
                    <div class="item">
                        <p>Username</p>
                        <div class="item">
                            <input type="text" name="name" required />
                        </div>
                    </div>
                    <div class="item">
                        <p>Tanggal Akhir Pembayaran</p>
                        <input type="date" name="name" required />
                    </div>
                    <div class="item">
                        <div class="double-item">
                            <div class="rows">
                                <p>Debit Air</p>
                                <input type="text" name="name" required />
                            </div>
                            <div class="rows">
                                <p>Biaya Air/bulan</p>
                                <input type="text" name="name" required />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p>Biaya Sewa Rusun/bulan</p>
                        <input type="text" name="name" required />
                    </div>
                    <div class="item">
                        <p>Total Tagihan</p>
                        <input type="text" name="name" required />
                    </div>
                    <div class="item">
                        <p>Keterangan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">Lunas</option>
                            <option value="2">Belum Lunas</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div></div>
            <div>
                <a href="#"><button class="btn-rule" type="submit" form="edit-informasi">Simpan</button></a>
                <a href="portal-admin-tagihan-penghuni.html" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>