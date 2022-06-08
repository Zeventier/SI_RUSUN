<header>
    <nav class="navbar navbar-light navbar-expand-md" style="background: var(--blue);">
        <div class="container-fluid"><a class="navbar-brand" href="portal-user-beranda.html" style="color: var(--light);font-style: normal;font-weight: bold;">PORTAL RUSUN</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="/portal/admin/pelayanan" style="color: var(--white);font-weight: bold;">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portal/admin/home" style="color: var(--white);">Rusunku</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portal/admin/pemberitahuan" style="color: var(--white);">Pemberitahuan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portal/admin/keluhan" style="color: var(--white);">Keluhan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portal/admin/logout" style="color: var(--white);">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="container" style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center;">DAFTAR PEMOHON</h2>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama Pemohon</th>
                                    <th>NIK</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($model['data'])) {
                                    foreach ($model['data'] as $value) {
                                ?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?php echo $value['nama_pemohon'] ?></td>
                                            <td><?php echo $value['nik_pemohon'] ?></td>
                                            <td><?php echo $value['keterangan'] ?></td>
                                            <td style="text-align: center;padding: 6px;padding-right: 0px;padding-left: 0px;"><button class="btn btn-primary" type="button" style="margin-right: 10px;">Tambah ke Portal</button><button class="btn btn-primary" type="button">Edit</button><a class="btn btn-primary float-right" type="button" href="/portal/admin/pelayanan/delete?id=<?php echo $value['id_pengumuman'] ?>" style="background: rgb(57,153,255);">Hapus</a></td>
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
                            </tbody>
                        </table>
                    </div><button class="btn btn-primary float-right" type="button" style="background: rgb(57,153,255);">Hapus</button><button class="btn btn-primary float-right" type="button" style="margin-right: 16px;">Umumkan Hasil</button><button class="btn btn-primary float-right" type="button" style="margin-right: 16px;">Atur Jadwal</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center;">JADWAL WAWANCARA</h2><button class="btn btn-primary float-right" type="button" style="margin-bottom: 15px;">Cetak</button>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Pasangan</th>
                                    <th>Ruangan yang dipilih</th>
                                    <th>Waktu Wawancara</th>
                                    <th>Tanggal Pengumuman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>