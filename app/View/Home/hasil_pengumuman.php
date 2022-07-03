    <style>

    </style>

    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar">
            <a href="/">Beranda</a>
            <a href="/huni_rusun">Huni Rusun</a>
            <a href="/pengumuman">Pengumuman</a>
            <a href="/portal">Portal Rusun</a>
            <a href="/about">Tentang Rusun</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>


    <div id="Modal-Pengumuman" class="modal" style="display: block;">
        <div class="modal-box-display">
            <span id="close" class="close"><i class="fas fa-times"></i></span>

            <?php if ($model['data']->pengumuman->keterangan == 'Wawancara') { ?>

                <h1 class="heading"> Informasi Jadwal Wawancara</h1>
                <div class="rule">
                    <form action="" class="login-form">
                        <p>Nama Pemohon</p>
                        <input type="text" value="<?php echo $model['data']->pengumuman->nama_pemohon ?? '';  ?>" class="box" readonly>
                        <p>Tanggal Wawancara</p>
                        <input type="datetime-local" value="<?php echo $model['data']->pengumuman->t_wawancara ?? '';  ?>" name="t_wawancara" class="box" readonly>
                        <p>Tanggal Hasil</p>
                        <input type="datetime-local" value="<?php echo $model['data']->pengumuman->t_hasil ?? '';  ?>" name="t_hasil" class="box" readonly>
                    </form>
                </div>

            <?php } else if ($model['data']->pengumuman->keterangan == 'Lolos') { ?>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Selamat Anda lolos pengajuan penghunian rusun! </h3>
                        <p>Berikut ini adalah informasi akun portal rusun anda:</p>
                        <p>Username</p>
                        <input value="<?php echo $model['data']->penghuni->username ?? '';  ?>" class="box-annonce" readonly>
                        <p>Password</p>
                        <input value="<?php echo $model['data']->pengumuman->password ?? '';  ?>" class=box-annonce readonly>
                        <p>Lantai</p>
                        <input value="<?php echo $model['data']->ruangan->lantai ?? '';  ?>" class=box-annonce readonly>
                        <p>Ruang Rusun</p>
                        <input value="<?php echo $model['data']->ruangan->no_ruang ?? '';  ?>" class=box-annonce readonly>
                    </form>
                </div>

            <?php } else if ($model['data']->pengumuman->keterangan == 'Ditolak') { ?>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Mohon Maaf Permohonan Anda Ditolak! </h3>
                    </form>
                </div>

            <?php } else if ($model['data']->pengumuman->keterangan == 'Proses Seleksi') { ?>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Permohonan Anda Sedang Dalam Proses Seleksi </h3>
                    </form>
                </div>

            <?php } ?>

        </div>
    </div>

    </section>
    <script>
        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks on <span> (x), close the modal

        spans[0].onclick = function() {
            window.location = '/pengumuman';
        }
    </script>
    <script src="assets/js/script.js"></script>