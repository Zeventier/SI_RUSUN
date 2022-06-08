    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="/portal/admin">Pelayanan</a>
            <a href="/portal/admin/home">Rusunku</a>
            <a href="/portal/admin/pemberitahuan">Pemberitahuan</a>
            <a href="/portal/admin/keluhan?date=<?php echo date('Y-m') ?>">Keluhan</a>
            <a href="/portal/admin/logout"> Logout</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="form-input">
        <div>
            <h1 class="heading"> Kelola Data Pemohon</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="kelola-pemohon">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <div class="item">
                            <input type="text" name="name" />
                        </div>
                    </div>
                    <div class="item">
                        <p>Nomor Telepon</p>
                        <input type="tel" name="name" />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="text" name="name" />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="text" name="name" />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" name="name" />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">Rp 0 - Rp 1.999.999,</option>
                            <option value="2">Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="3">Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Jumlah Penghuni</p>
                        <input type="number" name="name" />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" name="name" />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" name="name" />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">Rp 0 - Rp 1.999.999,</option>
                            <option value="2">Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="3">Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Pilih Ruangan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1"> 1A</option>
                            <option value="2"> 2A</option>
                            <option value="3">3A</option>
                        </select>
                    </div>

                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="portal-admin-kelola-data-pemohon-2.html"><button class="btn-rule" type="submit" form="kelola-pemohon">Lanjut</button></a>
                <a href="portal-admin-pelayanan.html" class="btn-rule">Batal</a>
            </div>
        </div>

    </section>