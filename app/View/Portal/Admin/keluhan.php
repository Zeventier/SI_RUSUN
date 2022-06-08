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
        <form method="get" class="of" action="/portal/admin/keluhan">
            <div class="nav-rule">
                <div class="form-input">
                    <div class="list">

                        <div class="single-item">
                            <p>Pilih Waktu</p>
                            <input type="month" name="date" />
                        </div>
                    </div>
                </div>
                <div id="not-print">
                    <button type="submit" class="btn-rule">Pilih</button>
                    <button onclick="window.print()" class=" btn-rule">Cetak</button>
                </div>
            </div>
        </form>
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

                <?php if (isset($model['data'])) {
                    foreach ($model['data'] as $value) {
                ?>

                        <tr>
                            <td><?php echo $value['waktu'] ?></td>
                            <td><?php echo $value['kode_rusun'] ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['keluhan'] ?></td>
                            <td><?php echo $value['tanggapan'] ?></td>
                            <td id="not-print" class="table-btn">
                                <div class="btn-center">
                                    <a href="/portal/admin/tanggapan?id_keluhan=<?php echo $value['id_keluhan'] ?>" class="btn-table">Tanggapi</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6">
                            <center>No data</center>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </section>

    <script src="js/script.js"></script>