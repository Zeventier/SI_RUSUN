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
            <h1 class="heading"> Tambah Ke Portal</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="tambah-portal">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <input type="text" id="nama_pemohon" value="<?php echo $model['data']['pemohon']->nama_pemohon ?>" name="nama_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Telepon</p>
                        <input type="tel" minlength="10" pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$" name="no_telp" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" value="<?php echo $model['data']['pemohon']->nik_pemohon ?>" name="nik_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" value="<?php echo $model['data']['pemohon']->nomor_kk ?>" name="no_kk" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" value="<?php echo $model['data']['pemohon']->kerja_pemohon ?>" name="kerja_wakil" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan</p>
                        <select name="gaji_pemohon" required>
                            <option value="">Select</option>
                            <option value="1">Rp 0 - Rp 1.999.999,</option>
                            <option value="2">Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="3">Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Jumlah Penghuni</p>
                        <input type="number" min="1" max="4" value="<?php echo $model['data']['pemohon']->jlh_penghuni ?>" name="jlh_penghuni" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" value="<?php echo $model['data']['pemohon']->nama_psgn ?>" name="nama_psgn" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" value="<?php echo $model['data']['pemohon']->kerja_psgn ?>" name="kerja_psgn" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select name="gaji_psgn" required>
                            <option value="">Select</option>
                            <option value="1">Rp 0 - Rp 1.999.999,</option>
                            <option value="2">Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="3">Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Kode Rusun</p>
                        <input type="text" name="ruangan" required />
                    </div>
                    <div class="item">
                        <p>Tanggal Mulai Menghuni</p>
                        <input type="text" name="tgl_huni" required />
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <input type="text" name="username" required />
                    </div>
                    <div class="item">
                        <p>Password</p>
                        <input type="text" name="password" required />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="#"><button class="btn-rule" type="submit" form="tambah-portal">Tambah</button></a>
                <a href="portal-admin-pelayanan.html" class="btn-rule">Batal</a>
            </div>
    </section>

    <script src="assets/js/script.js"></script>