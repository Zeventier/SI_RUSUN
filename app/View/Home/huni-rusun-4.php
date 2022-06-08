<body>
    <header class="header">
        <a href="#" class="logo">SI<span>Rusun</span></a>
        <nav class="navbar">
            <a href="index.html">Beranda</a>
            <a href="huni-rusun-1.html">Huni Rusun</a>
            <a href="pengumuman.html">Pengumuman</a>
            <a href="portal-login.html">Portal Rusun</a>
            <a href="tentang-kami.html">Tentang Rusun</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </header>

    <section class="guide">

        <h1 class="heading">Formulir Pengajuan Menghuni Rusun</h1>
        <div class="rule">
            <div class="list">
                <p>
                    Anda telah berada di tahap terakhir pengajuan menghuni rusun. Sebelum menyelesaikan tahapan ini,
                    pastikan anda telah membaca ketentuan berikut:
                </p>

                <div>
                    <p>
                        Untuk Pemohon yang mengumpulkan fotokopi berkas secara langsung, dimohon agar membawa berkas
                        berikut pada saat wawancara (yang telah dijelaskan pada tahap 1):
                    </p>
                    <div class="bullet">
                        <p><span>1. </span>
                            KTP Pemohon dan KTP Pasangan.
                        </p>
                        <p><span>2. </span>
                            Kartu Keluarga.
                        </p>
                        <p><span>3. </span>
                            Surat Keterangan Memiliki Pekerjaan Tetap.
                        </p>
                        <p><span>4. </span>
                            Struk/Rincian Gaji.
                        </p>
                        <p><span>5. </span>
                            Surat Nikah.
                        </p>
                    </div>
                </div>
                <p class="semi-bold">
                    *Informasi terkait permohonan yang diajukan paling lambat akan diumumkan 7 hari setelah permohonan
                    terkirim dan dapat diakses pada halaman "Pengumuman".
                </p>
            </div>
        </div>

        <div class="nav-rule">
            <p class="num-rule">Tahap <span>4</span> dari 4</p>
            <div>
                <a href="index.html" id="selesai" class="btn-rule">Selesai</a>
                <a href="huni-rusun-3.html" class="btn-rule">Kembali</a>
            </div>
        </div>

        <div class="toast">
            <div class="toast-content">
                <i class="fas fa-check check"></i>

                <div class="message">
                    <span class="text text-1">Success</span>
                    <span class="text text-2">Your changes has been saved</span>
                </div>
            </div>
            <i class="fas fa-times close"></i>

            <div class="progress"></div>
        </div>
    </section>
    
    <script>
        const button = document.getElementById("selesai"),
            toast = document.querySelector(".toast")
        closeIcon = document.querySelector(".close"),
            progress = document.querySelector(".progress");

        let timer1, timer2;

        button.addEventListener("click", () => {
            toast.classList.add("active");
            progress.classList.add("active");

            timer1 = setTimeout(() => {
                toast.classList.remove("active");
            }, 5000); //1s = 1000 milliseconds

            timer2 = setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);
        });

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);

            clearTimeout(timer1);
            clearTimeout(timer2);
        });
    </script>
    <script src="js/script.js"></script>