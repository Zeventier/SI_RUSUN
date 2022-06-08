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

   <section class="home" id="home">
      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <section class="swiper-slide slide" style="background: url(/assets/img/swiper-img.jpg) no-repeat;">
               <div class="content">
                  <h3>Selamat Datang </h3>
                  <h4>Di Rusunawa <span>Teluk Kelayan</span> </h4>
                  <a href="tentang-kami.html" class="btn">Tentang Rusun</a>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/swiper-img.jpg) no-repeat;">
               <div class="content">
                  <h3>Rusunawa <span> Teluk Kelayan </span></h3>
                  <h4>Kota Banjarmasin</h4>
                  <a href="tentang-kami.html" class="btn">Tentang Rusun</a>
               </div>
            </section>

         </div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>

   </section>

   <section class="facility" id="facility">
      <h1 class="heading"> Fasilitas Rusun </h1>
      <div class="box-container">

         <a href="images/fasilitas-1.jpeg" class="box">
            <div class="image">
               <img src="images//fasilitas-1.jpeg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Kamar Tidur Utama</h3>
               </div>
            </div>
         </a>

         <a href="images/fasilitas-2.jpeg" class="box">
            <div class="image">
               <img src="images/fasilitas-2.jpeg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Kamar Tidur Anak</h3>
               </div>
            </div>
         </a>


         <a href="images/fasilitas-3.png" class="box">
            <div class="image">
               <img src="images/fasilitas-3.png" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Sofa & Meja</h3>
               </div>
            </div>
         </a>

         <a href="images/fasilitas-4.jpeg" class="box">
            <div class="image">
               <img src="images/fasilitas-4.jpeg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Kursi & Meja</h3>
               </div>
            </div>
         </a>

         <a href="images/fasilitas-5.png" class="box">
            <div class="image">
               <img src="images/fasilitas-5.png" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Dapur</h3>
               </div>
            </div>
         </a>

         <a href="images/fasilitas-6.png" class="box">
            <div class="image">
               <img src="images/fasilitas-6.png" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Kamar Mandi</h3>
               </div>
            </div>
         </a>

      </div>
   </section>

   <section class="guide">

      <h1 class="heading"> Panduan Pengajuan Penghunian Rusun</h1>
      <div class="rule">
         <h3>Tahap <span>1</span></h3>
         <p>Pemohon membaca syarat dan ketentuan.</p>
      </div>
      <div class="rule">
         <h3>Tahap <span>2</span></h3>
         <p>Pemohon mengisi formulir pendaftaran.</p>
      </div>
      <div class="rule">
         <h3>Tahap <span>3</span></h3>
         <p>Pemohon mengisi formulir dengan memilih ruangan dan memilih metode pengumpulan berkas dan lanjut jika
            mengumpulkan berkas secara online.</p>
      </div>
      <div class="rule">
         <h3>Tahap <span>4</span></h3>
         <p>Tahap akhir bahwa proses permohonan telah selesai dilakukan.</p>
      </div>
   </section>

   <section class="footer">
      <div class="credit"> @Sistem Informasi Rusunawa <span>Teluk Kelayan</span></div>
   </section>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>
   <script src="js/slider.js"></script>

   <script>
      lightGallery(document.querySelector('.facility .box-container'));
   </script>