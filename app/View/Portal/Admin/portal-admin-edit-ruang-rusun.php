    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="portal-rusun.html">Beranda</a>
            <a href="portal-rusunku.html">Rusunku</a>
            <a href="portal-pemberitahuan.html">Pemberitahuan</a>
            <a href="portal-keluhan.html">Keluhan</a>
            <a href="portal-login.html"> Logout</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="form-input">
        <div>
            <h1 class="heading">Edit Ruang Rusun</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form action="/" id="edit-ruang">
                    <div class="item">
                        <p>Nomor Rusun</p>
                        <input type="text" name="name" required />
                    </div>
                    <div class="item">
                        <p>Lantai</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="item">
                        <p>Harga Sewa</p>
                        <input type="text" name="name" required />
                    </div>
                    <div class="item">
                        <p>Keterangan</p>
                        <select required>
                            <option value="">Select</option>
                            <option value="1">Kosong</option>
                            <option value="2">Rusak</option>
                            <option value="3">Terisi</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div></div>
            <div>
                <a href="#"><button class="btn-rule" type="submit" form="edit-ruang">Simpan</button></a>
                <a href="portal-rusunku.html" class="btn-rule">Kembali</a>
            </div>
        </div>
    </section>