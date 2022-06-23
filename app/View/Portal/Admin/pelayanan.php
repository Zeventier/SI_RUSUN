    <header class="header">
        <a href="/portal/admin" class="logo">Portal<span>Rusun</span></a>
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
            <h1 class="heading">Daftar Pemohon</h1>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>Nama Pemohon</th>
                    <th>Nomor Induk Keluarga</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>

                </tr>
                <?php if (isset($model['data'])) {
                    foreach ($model['data'] as $value) {
                ?>
                        <tr>
                            <td><?php echo $value['nama_pemohon'] ?></td>
                            <td><?php echo $value['nik_pemohon'] ?></td>
                            <td><?php echo $value['keterangan'] ?></td>
                            <td class="table-btn">
                                <div class="btn-center">
                                    <a <?php if ($value['keterangan'] == 'Lolos' || $value['keterangan'] == 'Ditolak') echo 'onclick="return false;" style="cursor: not-allowed;"' ?> href="/portal/admin/tambah_penghuni?id_pengumuman=<?php echo $value['id_pengumuman'] ?>" class="btn-table-success">Tambah Ke Portal</a>
                                    <a <?php if ($value['keterangan'] == 'Ditolak') echo 'onclick="return false;" style="cursor: not-allowed;"' ?> href="/portal/admin/edit_pemohon?id_pengumuman=<?php echo $value['id_pengumuman'] ?>" class="btn-table">Kelola</a>
                                    <a <?php if ($value['keterangan'] == 'Lolos' || $value['keterangan'] == 'Ditolak') echo 'onclick="return false;" style="cursor: not-allowed;"' ?> href="/portal/admin/atur_jadwal?id=<?php echo $value['id_pengumuman'] ?>" class="btn-table">Atur Jadwal</a>
                                    <a href="" class="btn-table-warning">Lihat Berkas</a>
                                    <a <?php if ($value['keterangan'] == 'Lolos' || $value['keterangan'] == 'Ditolak') echo 'onclick="return false;" style="cursor: not-allowed;"' ?> href="/portal/admin/pelayanan/tolak?id=<?php echo $value['id_pengumuman'] ?>" class="btn-table">Tolak</a>
                                    <a href="/portal/admin/pelayanan/delete?id=<?php echo $value['id_pengumuman'] ?>" class="btn-table">Hapus</a>
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

    </section>
    <script src="/assets/js/script.js"></script>