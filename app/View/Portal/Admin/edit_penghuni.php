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
            <h1 class="heading"> <?php echo $model['data']->penghuni->username ?? "" ?> - Kode Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/edit_penghuni?id_penghuni=<?php echo $_GET['id_penghuni'] ?>" id="edit-penghuni">
                    <div class="item">
                        <p>Nama Wakil (Kepala Keluarga)</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->nama_wakil ?? "" ?>" name="nama_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="tel" value="<?php echo $model['data']->penghuni->nik_wakil ?? "" ?>" pattern="[0-9]+" minlength="16" maxlength="16" name="nik_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="tel" value="<?php echo $model['data']->penghuni->nomor_kk ?? "" ?>" pattern="[0-9]+" minlength="16" maxlength="16" name="no_kk" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->kerja_wakil ?? "" ?>" name="kerja_wakil" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan</p>
                        <select name="gaji_wakil" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->penghuni->gaji_wakil == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->penghuni->gaji_wakil == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 4.000.000, - Rp 6.000.000," <?php if ($model['data']->penghuni->gaji_wakil == 'Rp 4.000.000, - Rp 6.000.000,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Jumlah Penghuni</p>
                        <input type="number" min="1" max="4" value="<?php echo $model['data']->penghuni->jlh_penghuni ?? "" ?>" name="jlh_penghuni" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->nama_psgn ?? "" ?>" name="nama_psgn" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->kerja_psgn ?? "" ?>" name="kerja_psgn" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select name="gaji_psgn" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->penghuni->gaji_psgn == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->penghuni->gaji_psgn == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 4.000.000, - Rp 6.000.000," <?php if ($model['data']->penghuni->gaji_psgn == 'Rp 4.000.000, - Rp 6.000.000,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Kode Rusun</p>
                        <select name="ruangan">
                            <option value="">Select</option>
                            <?php if (isset($model['ruangan'])) {
                                $i = 0;
                                foreach ($model['ruangan'] as $value) {
                                    if (($value['keterangan'] == 'Terisi' || $value['keterangan'] == 'Rusak') && $value['kode_rusun'] != $model['data']->penghuni->kode_rusun) {
                                        $i++;
                                        continue;
                                    } else
                            ?>
                                    <option value="<?php echo $value['kode_rusun'] ?>" <?php if ($value['kode_rusun'] == $model['data']->penghuni->kode_rusun) {
                                                                                            echo "selected";
                                                                                        } ?>>Ruang <?php echo $value['no_ruang'] ?> - Lantai <?php echo $value['lantai'] ?></option>
                                <?php }
                                if ($i == sizeof($model['ruangan'])) { ?>
                                    <option value="">Tidak ada ruangan tersedia</option>
                                <?php }
                            } else {
                                ?>
                                <option value="">Tidak ada ruangan tersedia</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <p>Tanggal Mulai Menghuni</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->tgl_huni ?? "" ?>" name="tgl_huni" required />
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <input type="text" value="<?php echo $model['data']->penghuni->username ?? "" ?>" name="username" readonly />
                    </div>
                    <div class="item">
                        <p>Password</p>
                        <input type="password" value="<?php echo $model['data']->user->password ?? "" ?>" name="password" readonly />
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