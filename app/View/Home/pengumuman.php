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

    <section class="guide">
        <h1 class="heading"> PERIKSA INFO JADWAL & PENGUMUMAN HASIL</h1>
        </div>
        <div class="form-input">
            <form action="" class="login-form">
                <input type="text" placeholder="Nama Pemohon" class="box" required>
                <input type="tel" pattern="[0-9]+" minlength="16" maxlength="16" placeholder="NIK Pemohon" class="box" required>
                <button id="modal-btn" class="btn">Periksa</button>
            </form>
        </div>

        <div id="modal-box" class="modal">
            <div class="modal-content">
                <span class="close"><i class="fas fa-times"></i></span>
                <h1 class="heading"> Informasi Jadwal Wawancara</h1>
                <div class="rule">
                    <div class="list">
                        <h3>Nama Pemohon:</h3>
                        <p>Anang</p>
                        <h3>Waktu Wawancara:</h3>
                        <p>01 Januari 2022</p>
                        <h3>Waktu Pengumuman:</h3>
                        <p>10 Januari 2022</p>
                    </div>
                </div>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Selamat Anda lolos pengajuan penghunian rusun! </h3>
                        <p>Berikut ini adalah informasi akun
                            portal rusun anda:</p>
                        <p>Username</p>
                        <input class="box" readonly>
                        <p>Password</p>
                        <input class="box" readonly>
                        <p>Ruang Rusun</p>
                        <input class="box" readonly>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        var modal = document.getElementById("modal-box");
        var btn = document.getElementById("modal-btn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="assets/js/script.js"></script>