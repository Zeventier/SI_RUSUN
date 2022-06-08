<header>
    <nav class="navbar navbar-light navbar-expand-md" style="background: var(--blue);">
        <div class="container-fluid"><a class="navbar-brand" href="portal-user-beranda.html" style="color: var(--light);font-style: normal;font-weight: bold;">PORTAL RUSUN</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="portal-admin-pelayanan.html" style="color: var(--white);">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="portal-admin-rusunku.html" style="color: var(--white);font-weight: bold;">Rusunku</a></li>
                    <li class="nav-item"><a class="nav-link" href="portal-admin-pemberitahuan.html" style="color: var(--white);">Pemberitahuan</a></li>
                    <li class="nav-item"><a class="nav-link" href="portal-admin-keluhan.html" style="color: var(--white);">Keluhan</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="text-align: center;">TAGIHAN PENGHUNI</h2>
                    <p style="margin-bottom: 5px;">Pilih Waktu</p><select style="margin-right: 13px;">
                        <optgroup label="This is a group">
                            <option value="1" selected="">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </optgroup>
                    </select><input type="number" name="tahun"><button class="btn btn-primary float-right" type="button" style="margin-bottom: 15px;">Cetak</button>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Username</th>
                                    <th>Deadline</th>
                                    <th>Debit Air (m^3)</th>
                                    <th>Total Air</th>
                                    <th>Sewa Rusun</th>
                                    <th>Total</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 5</td>
                                    <td>Cell 5</td>
                                    <td style="text-align: center;padding: 6px;padding-right: 0px;padding-left: 0px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 5</td>
                                    <td>Cell 5</td>
                                    <td style="text-align: center;padding: 6px;padding-right: 0px;padding-left: 0px;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><button class="btn btn-primary float-right" type="button" style="background: rgb(57,153,255);">Kembali</button><button class="btn btn-primary float-right" type="button" style="margin-right: 16px;">Tandai Lunas</button><button class="btn btn-primary float-right" type="button" style="margin-right: 16px;">Ubah Harga Air</button><button class="btn btn-primary float-right" type="button" style="margin-right: 16px;">Edit</button>
                </div>
            </div>
        </div>
    </section>
</main>
