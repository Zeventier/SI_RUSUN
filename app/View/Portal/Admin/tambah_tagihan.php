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

    <section class="form-input">
        <div>
            <h1 class="heading">Edit Informasi Tagihan</h1>
        </div>

        <div class="rule">
            <div class="list">
                <form method="post" action="/portal/admin/tambah_tagihan" id="edit-informasi">
                    <div class="item">
                        <p>Username</p>
                        <div class="item">
                            <select name="username" required>
                                <option value="">Select</option>
                                <?php if ($model['data'] != null) {
                                    $i = 0;
                                    foreach ($model['data'] as $value) {
                                ?>
                                        <option value="<?php echo $value['username'] ?>"><?php echo $value['username'] ?></option>
                                    <?php }
                                } else {
                                    ?>
                                    <option value="" disabled>Tidak ada penghuni</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <p>Tanggal Akhir Pembayaran</p>
                        <input type="datetime-local" name="deadline" required />
                    </div>
                    <div class="item">
                        <div class="double-item">
                            <div class="rows">
                                <p>Debit Air</p>
                                <input type="number" name="debit_air" required />
                            </div>
                            <div class="rows">
                                <p>Harga Air/Debit</p>
                                <input type="number" value="<?php echo $model['air'][0]['harga_akhir'] ?? ""; ?>" name="biaya_air" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <p>Biaya Sewa Rusun/bulan</p>
                        <input type="number" name="sewa_rusun" required />
                    </div>
                    <div class="item">
                        <p>Total Tagihan</p>
                        <input type="number" value="0" name="total_tagihan" required disabled />
                    </div>
                    <div class="item">
                        <p>Keterangan</p>
                        <select name="keterangan" required>
                            <option value="">Select</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas">Belum Lunas</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="nav-rule">
            <div></div>
            <div>
                <button class="btn-rule" type="submit" form="edit-informasi">Simpan</button>
                <a href="/portal/admin/tagihan_penghuni?date=<?php echo date('Y-m') ?>" class="btn-rule">Batal</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/script.js"></script>
    <script>
        var debit_air = document.getElementsByName('debit_air')[0];
        var biaya_air = document.getElementsByName('biaya_air')[0];
        var sewa_rusun = document.getElementsByName('sewa_rusun')[0];
        var total_tagihan = document.getElementsByName('total_tagihan')[0];


        function sumTotal() {
            var harga_air = 0;
            var harga_rusun = 0;

            if (debit_air.value != '') harga_air = parseInt(debit_air.value);
            if (sewa_rusun.value != '') harga_rusun = parseInt(sewa_rusun.value);

            var sum = harga_air * parseInt(biaya_air.value) + harga_rusun;
            total_tagihan.value = sum;
        }

        debit_air.addEventListener('keyup', sumTotal);
        sewa_rusun.addEventListener('keyup', sumTotal);
    </script>