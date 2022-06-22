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

    <section class="guide">
        <h1 class="heading"> PERIKSA INFO JADWAL & PENGUMUMAN HASIL</h1>
        </div>
        <div class="form-input">
            <form action="" class="login-form">
                <p>Nama Pemohon</p>
                <input type="text" pattern="^[a-zA-Z@ ]+$" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" class="box" required>
                <p>NIK Pemohon</p>
                <input type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" class="box" required>
                <button href="#Modal-Pengumuman" class="modal-button">Periksa</button>
                <div class="flex">
                    <a href="#" id="modal-btn">Hasil Belum Diumumkan?</a>
                </div>
            </form>
        </div>

        <div id="Modal-Pengumuman" class="modal">
            <div class="modal-content">
                <span id="close" class="close"><i class="fas fa-times"></i></span>
                <h1 class="heading"> Informasi Jadwal Wawancara</h1>
                <div class="rule">
                    <form action="" class="login-form">
                        <p>Nama Pemohon</p>
                        <input type="text" class="box" readonly>
                        <p>NIK Pemohon</p>
                        <input type="text" class="box" readonly>
                        <p>NIK Pemohon</p>
                        <input type="text" class="box" readonly>
                    </form>
                </div>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Selamat Anda lolos pengajuan penghunian rusun! </h3>
                        <p>Berikut ini adalah informasi akun portal rusun anda:</p>
                        <p>Username</p>
                        <input class="box" readonly>
                        <p>Password</p>
                        <input class="box" readonly>
                        <p>Lantai</p>
                        <input class="box" readonly>
                        <p>Ruang Rusun</p>
                        <input class="box" readonly>
                    </form>
                </div>

                <h1 class="heading"> Hasil Seleksi Pengajuan Penghunian Rusun</h1>
                <div class="form-output">
                    <form action="" class="form">
                        <h3>Mohon Maaf Permohonan Anda Ditolak! </h3>
                    </form>
                </div>
            </div>
        </div>

        <div id="modal-box" class="modal-box">
            <div class="modal-content-annonce">
                <span class="close-box"><i class="fas fa-times"></i></span>
                <p>Apabila hasil pengumuman belum diumumkan dapat menghubungi admin pada nomor telpon dibawah
                </p>
                <div class="small-text"><i class="fab fa-whatsapp"></i> <b>Telepon/WA</b><br>+62 822 5086 6070</div>
            </div>
        </div>
    </section>


    <script>
        // Get the button that opens the modal
        var btn = document.querySelectorAll("button.modal-button");

        // All page modals
        var modals = document.querySelectorAll('.modal');

        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal
        for (var i = 0; i < btn.length; i++) {
            btn[i].onclick = function(e) {
                e.preventDefault();
                modal = document.querySelector(e.target.getAttribute("href"));
                modal.style.display = "block";
            }
        }

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
            spans[i].onclick = function() {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }

        var modal_box = document.getElementById("modal-box");
        var button = document.getElementById("modal-btn");
        var span = document.getElementsByClassName("close-box")[0];
        button.onclick = function() {
            modal_box.style.display = "block";
        }
        span.onclick = function() {
            modal_box.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal_box) {
                modal_box.style.display = "none";
            }
        }
    </script>
    <script src="assets/js/script.js"></script>