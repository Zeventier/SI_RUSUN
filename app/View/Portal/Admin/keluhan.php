    <header id="not-print" class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="portal-admin-pelayanan.html">Pelayanan</a>
            <a href="portal-admin-rusunku.html">Rusunku</a>
            <a href="portal-admin-pemberitauan.html">Pemberitahuan</a>
            <a href="portal-admin-keluhan.html">Keluhan</a>
            <a href="portal-login.html"> Logout</a>
        </nav>

        <div class="icons">
            <div id="portal-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="table-content">
        <div>
            <h1 class="heading">Daftar Keluhan</h1>
        </div>
        <div class="nav-rule">
            <div class="form-input">
                <div class="list">
                    <form class="of" action="/">
                        <div class="single-item">
                            <p>Pilih Waktu</p>
                            <input type="date" name="name" />
                            <input type="year" name="name" />
                        </div>
                    </form>
                </div>
            </div>
            <div id="not-print">
                <a href="#" class="btn-rule">Pilih</a>
                <button onclick="window.print()" class=" btn-rule">Cetak</button>
            </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Waktu</th>
                    <th>Kode Rusun</th>
                    <th>Username</th>
                    <th>Keluhan</th>
                    <th>Tanggapan</th>
                    <th id="not-print">Aksi</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="not-print" class="table-btn">
                        <div class="btn-center">
                            <a href="portal-admin-tanggapan-keluhan.html" class="btn-table">Tanggapi</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </section>

    <script src="js/script.js"></script>