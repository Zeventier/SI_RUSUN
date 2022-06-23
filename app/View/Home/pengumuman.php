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
            <form method="post" action="/pengumuman" class="login-form">
                <p>Nama Pemohon</p>
                <input name="nama_pemohon" type="text" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" class="box" required>
                <p>NIK Pemohon</p>
                <input name="nik_pemohon" type="text" minlength="16" maxlength="16" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" class="box" required>
                <button type="submit" class="modal-button">Periksa</button>
                <div class="flex">
                    <a href="#" id="modal-btn">Hasil Belum Diumumkan?</a>
                </div>
            </form>
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