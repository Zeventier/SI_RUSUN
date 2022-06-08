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
            <h1 class="heading">Tagihan Penghuni</h1>
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
                <button onclick="window.print('rule')" class=" btn-rule">Cetak</button>
            </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Username</th>
                    <th>Tanggal Akhir Pembayaran</th>
                    <th>Debit Air/㎥</th>
                    <th>Total Air</th>
                    <th>Sewa Rusun</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                    <th id="not-print">Aksi</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="not-print" class="table-btn">
                        <div class="btn-center">
                            <a href="portal-admin-edit-informasi-tagihan.html" class="btn-table">Edits</a>
                            <a href="" class="btn-table">Tandai Lunas</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="space nav-rule">
            <div></div>
            <div>
                <a id="not-print" href="portal-admin-kelola-air.html" class="btn-rule">Ubah Harga Air</a>
                <a id="not-print" href="portal-admin-rusunku.html" class="btn-rule">Kembali</a>
            </div>
        </div>

    </section>