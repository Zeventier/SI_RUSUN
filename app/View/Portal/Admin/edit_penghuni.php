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
            <h1 class="heading"> Username - Kode Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/edit_penghuni?id_penghuni=<?php echo $_GET['id_penghuni'] ?>" id="edit-penghuni">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <input autocapitalize="words" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" name="nama_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" pattern="[0-9]" minlength="16" maxlength="16" name="nik_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" pattern="[0-9]+" minlength="16" maxlength="16" name="no_kk" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" pattern="^[a-zA-Z@ ]$" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" name="kerja_wakil" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan</p>
                        <select name="gaji_wakil" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->gaji_wakil == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->gaji_wakil == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 4.000.000, - Rp 6.000.000," <?php if ($model['data']->gaji_wakil == 'Rp 4.000.000, - Rp 6.000.000,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Jumlah Penghuni</p>
                        <input type="text" maxlength="1" oninput="this.value=this.value.replace(/(?![1-4])./gmi,'')" min="1" max="4" name="jlh_penghuni" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" name="nama_psgn" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" name="kerja_psgn" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select name="gaji_psgn" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->gaji_psgn == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->gaji_psgn == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 4.000.000, - Rp 6.000.000," <?php if ($model['data']->gaji_psgn == 'Rp 4.000.000, - Rp 6.000.000,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Kode Rusun</p>
                        <input class="disable" type="text" value="<?php echo $model['penghuni']->kode_rusun ?? "" ?>" name="kode_rusun" readonly />
                    </div>
                    <div class="item">
                        <p>Tanggal Mulai Menghuni</p>
                        <input title="Tidak Dapat Dirubah" type="text" class="disable" value="<?php echo $model['penghuni']->tgl_huni ?? "" ?>" name="tgl_huni" readonly />
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <input title="Tidak Dapat Dirubah" type="text" class="disable" value="<?php echo $model['penghuni']->username ?? "" ?>" name="username" readonly />
                    </div>
                    <div class="item">
                        <p>Password</p>
                        <input title="Tidak Dapat Dirubah" type="password" class="disable" value="<?php echo $model['user']->password ?? "" ?>" name="password" readonly />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <button class="btn-success" type="submit" form="edit-penghuni">Simpan</button>
                <a href="/portal/admin/penghuni" class="btn-rule">Batal</a>
            </div>
    </section>

    <script src="assets/js/script.js"></script>