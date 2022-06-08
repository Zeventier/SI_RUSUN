    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar">
            <a href="index.html">Beranda</a>
            <a href="huni-rusun-1.html">Huni Rusun</a>
            <a href="pengumuman.html">Pengumuman</a>
            <a href="portal-login.html">Portal Rusun</a>
            <a href="tentang-kami.html">Tentang Rusun</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="form-input">
        <div>
            <h1 class="heading"> Formulir Pengajuan Menghuni Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="pengajuan-1">
                    <div class="item">
                        <p>Nama Pemohon (Kepala Keluarga)</p>
                        <input type="text" pattern="^[a-zA-Z@ ]+$" autocapitalize="words" id="nama_pemohon" name=""
                            required />
                    </div>
                    <div class="item">
                        <p>Nomor Telepon</p>
                        <input type="tel" minlength="10" pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$" name="name"
                            required />
                    </div>
                    <div class="item">
                        <p>Nomor Induk Kependudukan</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" name="name" required />
                    </div>
                    <div class="item">
                        <p>Nomor Kartu Keluarga</p>
                        <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" name="name" required />
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
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <p class="num-rule">Tahap <span>2</span> dari 4</p>
            <div>
                <a href="huni-rusun-3.html"><button class="btn-rule" type="submit"
                        form="pengajuan-1">Lanjut</button></a>
                <a href="huni-rusun-1.html" class="btn-rule">Kembali</a>
            </div>
    </section>

    <script type="text/javascript"></script>
    <script src="js/script.js"></script>