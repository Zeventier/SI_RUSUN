    <header class="header">
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
            <h1 class="heading"> <?php echo $model['penghuni']->username ?> - Kode Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="profile-rusunku">
                    <div class="item">
                        <p>Nama Lengkap (Kepala Keluarga)</p>
                        <input type="text" autocapitalize="words" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['penghuni']->nama_wakil ?? "" ?>" name="nama_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="text" minlength="16" maxlength="16" value="<?php echo $model['penghuni']->nik_wakil ?? "" ?>" name="nik_wakil" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="text" minlength="16" maxlength="16" value="<?php echo $model['penghuni']->nomor_kk ?? "" ?>" name="nomor_kk" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" pattern="^[a-zA-Z@ ]$" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['penghuni']->kerja_wakil ?? "" ?>" name="kerja_wakil" required />
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
                        <input type="text" maxlength="1" oninput="this.value=this.value.replace(/(?![1-4])./gmi,'')" value="<?php echo $model['penghuni']->jlh_penghuni ?? "" ?>" name="jlh_penghuni" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['penghuni']->nama_psgn ?? "" ?>" name="nama_psgn" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $model['penghuni']->kerja_psgn ?? "" ?>" name="kerja_psgn" required />
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
                        <input type="password" title="Tidak Dapat Dirubah" type="password" class="disable" value="<?php echo $model['user']->password ?? "" ?>" name="password" readonly />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="portal-profile-rusunku.html"><button class="btn-rule" type="submit" form="profile-rusunku">Simpan</button></a>
                <a href="/portal/user/rusunku" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>