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
                <form method="post" action="/portal/admin/tambah_penghuni?id_pengumuman=<?php echo $_GET['id_pengumuman']; ?>">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <input type="text" id="nama_pemohon" value="<?php echo $model['data']->pemohon->nama_pemohon; ?>" name="nama_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" value="<?php echo $model['data']->pemohon->nik_pemohon; ?>" name="nik_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" value="<?php echo $model['data']->pemohon->nomor_kk; ?>" name="no_kk" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" value="<?php echo $model['data']->pemohon->kerja_pemohon; ?>" name="kerja_wakil" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan</p>
                        <select name="gaji_wakil" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->pemohon->gaji_pemohon == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->pemohon->gaji_pemohon == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->pemohon->gaji_pemohon == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Jumlah Penghuni</p>
                        <input type="number" min="1" max="4" value="<?php echo $model['data']->pemohon->jlh_penghuni; ?>" name="jlh_penghuni" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" value="<?php echo $model['data']->pemohon->nama_psgn; ?>" name="nama_psgn" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" value="<?php echo $model['data']->pemohon->kerja_psgn; ?>" name="kerja_psgn" required />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select name="gaji_psgn" required>
                            <option value="">Select</option>
                            <option value="Rp 0 - Rp 1.999.999," <?php if ($model['data']->pemohon->gaji_psgn == 'Rp 0 - Rp 1.999.999,') {
                                                                        echo "selected";
                                                                    } ?>>Rp 0 - Rp 1.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->pemohon->gaji_psgn == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 2.000.000, - Rp 3.999.999,</option>
                            <option value="Rp 2.000.000, - Rp 3.999.999," <?php if ($model['data']->pemohon->gaji_psgn == 'Rp 2.000.000, - Rp 3.999.999,') {
                                                                                echo "selected";
                                                                            } ?>>Rp 4.000.000, - Rp 6.000.000,</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Pilih Ruangan</p>
                        <select name="ruangan" required>
                            <option value="">Select</option>
                            <?php if (isset($model['ruangan'])) {
                                foreach ($model['ruangan'] as $value) {
                                    if ($value['keterangan'] == 'Terisi' || $value['keterangan'] == 'Rusak') {
                                        continue;
                                    } else {
                            ?>
                                        <option value="<?php echo $value['kode_rusun'] ?>" <?php if ($value['kode_rusun'] == $model['data']->pemohon->kode_rusun) {
                                                                                                echo "selected";
                                                                                            } ?>>Ruang <?php echo $value['no_ruang'] ?> - Lantai <?php echo $value['lantai'] ?></option>
                                <?php }
                                }
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
                        <input type="date" name="tgl_huni" required />
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <input type="text" name="username" required />
                    </div>
                    <div class="item">
                        <p>Password</p>
                        <input type="password" name="password" required />
                    </div>

                    <div class="nav-rule">
                        <p></p>
                        <div>
                            <button class="btn-rule" type="submit">Tambah</button>
                            <a href="/portal/admin" class="btn-rule">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>