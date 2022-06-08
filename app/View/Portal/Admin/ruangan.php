    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar-portal">
            <a href="/portal/admin">Pelayanan</a>
            <a href="/portal/admin/home">Rusunku</a>
            <a href="/portal/admin/pemberitahuan">Pemberitahuan</a>
            <a href="/portal/admin/keluhan?date=<?php echo date('Y-m') ?>">Keluhan</a>
            <a href="/portal/admin/logout"> Logout</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="table-content">
        <div>
            <h1 class="heading">Daftar Ruang Rusun</h1>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>Kode Rusun</th>
                    <th>Nomor Rusun</th>
                    <th>Lantai</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>

                </tr>

                <?php if (isset($model['data'])) {
                    foreach ($model['data'] as $value) {
                ?>
                        <tr>
                            <td><?php echo $value['kode_rusun'] ?></td>
                            <td><?php echo $value['no_ruang'] ?></td>
                            <td><?php echo $value['lantai'] ?></td>
                            <td><?php echo $value['keterangan'] ?></td>
                            <td class="table-btn fit">
                                <div class="btn-center">
                                    <a href="/portal/admin/form_ruangan?kode_ruangan=<?php echo $value['kode_rusun'] ?>" class="btn-table">Edit</a>
                                    <a href="/portal/admin/ruangan/delete?kode_ruangan=<?php echo $value['kode_rusun'] ?>" class="btn-table">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
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
            <div class="nav-rule">
                <div></div>
                <div>
                    <a href="/portal/admin/form_ruangan" class="btn-rule">Tambah</a>
                    <a href="/portal/admin/home" class="btn-rule">Kembali</a>
                </div>
            </div>
        </div>

    </section>