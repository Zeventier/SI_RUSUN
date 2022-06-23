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
                        <input class="disable" readonly="readonly" title=" Tidak Bisa Dirubah" type="text" pattern="^[a-zA-Z@ ]+$" autocapitalize="words" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['data']->pemohon->nama_pemohon; ?>" name="nama_wakil" />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan</p>
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="<?php echo $model['data']->pemohon->nik_pemohon; ?>" name="nik_wakil" />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="<?php echo $model['data']->pemohon->nomor_kk; ?>" name="no_kk" />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" pattern="^[a-zA-Z@ ]+$" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['data']->pemohon->kerja_pemohon; ?>" name="kerja_wakil" />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Perbulan </p>
                        <select name="gaji_wakil" readonly="readonly">
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
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" maxlength="1" oninput="this.value=this.value.replace(/(?![1-4])./gmi,'')" value="<?php echo $model['data']->pemohon->jlh_penghuni; ?>" name="jlh_penghuni" />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['data']->pemohon->nama_psgn; ?>" name="nama_psgn" />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input class="disable" readonly="readonly" title="Tidak Bisa Dirubah" type="text" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['data']->pemohon->kerja_psgn; ?>" name="kerja_psgn" />
                    </div>
                    <div class="item">
                        <p>Kisaran Gaji Pasangan Perbulan</p>
                        <select name="gaji_psgn" readonly="readonly">
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
                        <select name="ruangan" readonly="readonly">
                            <option value="">Select</option>
                            <?php if (isset($model['ruangan'])) {
                                $i = 0;
                                foreach ($model['ruangan'] as $value) {
                                    if ($value['keterangan'] == 'Terisi' || $value['keterangan'] == 'Rusak') {
                                        $i++;
                                        continue;
                                    } else
                            ?>
                                    <option value="<?php echo $value['kode_rusun'] ?>" <?php if ($value['kode_rusun'] == $model['data']->pemohon->kode_rusun) {
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
                            <button class="btn-table-success" type="submit">Tambah</button>
                            <button class="btn-table-danger" onclick="location.href='/portal/admin'">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src=" assets/js/script.js"></script>