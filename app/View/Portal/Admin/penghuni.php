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

    <section class="table-content">
        <div>
            <h1 class="heading">Daftar Penghuni Rusun</h1>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Kode Rusun</th>
                    <th>Kepala Keluarga</th>
                    <th>Aksi</th>
                </tr>
                <?php if (isset($model['data'])) {
                    $i = 1;
                    foreach ($model['data'] as $value) {
                ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['kode_rusun'] ?></td>
                            <td><?php echo $value['nama_wakil'] ?></td>
                            <td class="table-btn fit">
                                <div class="btn-center">
                                    <a href="/portal/admin/edit_penghuni?id_penghuni=<?php echo $value['id_penghuni'] ?>" class="btn-table-success">Edit</a>
                                    <a href="/portal/admin/penghuni/delete?id_penghuni=<?php echo $value['id_penghuni'] ?>" class="btn-table-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">
                            <center>No data</center>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="nav-rule">
            <div></div>
            <div>
                <button onclick="location.href='/portal/admin/home'" class="btn-danger">Kembali</button>
            </div>
        </div>

    </section>

    <script src="assets/js/script.js"></script>