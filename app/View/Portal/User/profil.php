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
            <h1 class="heading"> Username - Kode Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="profile-rusunku">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <input type="text" id="nama_pemohon" name="" readonly />
                    </div>
                    <div class="item">
                        <p>Nomor Telepon</p>
                        <input type="tel" minlength="10" pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$" name="name" required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan Pemohon</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Pekerjaan</p>
                        <input type="text" name="name" required />
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
                        <input type="number" min="1" max="4" name="name" required />
                    </div>
                    <div class="item">
                        <p>Nama Pasangan</p>
                        <input type="text" name="name" required />
                    </div>
                    <div class="item">
                        <p>Pekerjaan Pasangan</p>
                        <input type="text" name="name" required />
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
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Harga Sewa Rusun</p>
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Tanggal Mulai Menghuni</p>
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Username</p>
                        <input type="text" name="name" readonly />
                    </div>
                    <div class="item">
                        <p>Password</p>
                        <input type="text" name="name" readonly />
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="portal-profile-rusunku.html"><button class="btn-rule" type="submit" form="profile-rusunku">Simpan</button></a>
                <a href="#" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>