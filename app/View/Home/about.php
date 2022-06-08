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

    <section class="about" id="tentang">
        <h1 class="heading"> Tentang Rusun </h1>

        <div class="row">
            <div class="video">
                <video controls>
                    <source src="video/Rusun_Teluk_Kelayan.mp4" autoplay loop>
                    Browser tidak mendukung video tag
                </video>
            </div>
            <div class="content">
                <h3><i class="fas fa-building"></i> Rumah Susun</h3>
                <p>1 Tower 4 Lantai, 58 Unit Hunian Type 36</p>

                <h3><i class="fas fa-map-marker-alt"></i> Lokasi</h3>
                <p>Jl. Teluk Kelayan, Kelurahan Kelayan Barat, Kecamatan Banjarmasin Selatan</p>

                <h3><i class="far fa-building"></i> Luas Bangunan</h3>
                <p>69,350 meter (panjang) x 21,150 meter (lebar)</p>

                <h3><i class="fas fa-wallet"></i> Iuran Unit Hunian</h3>
                <p>Rp. 450.000/bulan</p>
            </div>
        </div>

        <div class="box-container">
            <a href="images/images-1.png" class="box">
                <div class="image">
                    <img width="250" height="150" src="images/images-1.png" alt="">
                </div>
            </a>
            <a href="images/images-2.png" class="box">
                <div class="image">
                    <img width="250" height="150" src="images/images-2.png" alt="">
                </div>
            </a>
            <a href="images/images-3.png" class="box">
                <div class="image">
                    <img width="250" height="150" src="images/images-3.png" alt="">
                </div>
            </a>
            <a href="images/images-4.png" class="box">
                <div class="image">
                    <img width="250" height="150" src="images/images-4.png" alt="">
                </div>
            </a>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.about .box-container'));
    </script>