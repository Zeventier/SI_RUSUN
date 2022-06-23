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
            <h1 class="heading"> Kelola Data Pemohon</h1>
        </div>

        <div class="rule">
            <div class="list">
                <div class="item single-input">
                    <p>KTP Pemohon</p>
                    <input type="text" value="<?php echo $model['data']->ktp_pmhn ?? ''; ?>" name="ktp_wakil" />
                    <button class="modal-button" href="#myModal1">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>KTP Pasangan</p>
                    <input type="text" value="<?php echo $model['data']->ktp_psgn ?? ''; ?>" name="name" />
                    <button class="modal-button" href="#myModal2">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Kartu Keluarga</p>
                    <input type="text" value="<?php echo $model['data']->kartu_kk ?? ''; ?>" name="name" />
                    <button class="modal-button" href="#myModal3">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                    <input type="text" value="<?php echo $model['data']->srt_kerja ?? ''; ?>" name="name" />
                    <button class="modal-button" href="#myModal4">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Struk/Rincian Gaji</p>
                    <input type="text" value="<?php echo $model['data']->struk_gaji ?? ''; ?>" name="name" />
                    <button class="modal-button" href="#myModal5">Cetak</button>
                </div>
                <div class="item single-input">
                    <p>Surat Nikah</p>
                    <input type="text" value="<?php echo $model['data']->srt_nikah ?? ''; ?>" name="name" />
                    <button class="modal-button" href="#myModal6">Cetak</button>
                </div>
            </div>
        </div>

        <div class="nav-rule">
            <p></p>
            <div>
                <a href="/portal/admin" class="btn-rule">Kembali</a>
            </div>
        </div>

        <div id="myModal1" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/<?php echo $model['data']->srt_nikah ?? ''; ?>" class="box">
                    <div class="image">
                        <img src="/<?php echo $model['data']->srt_nikah ?? ''; ?>" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal1" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal2" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal3" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal4" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal5" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div id="myModal6" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <a href="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" class="box">
                    <div class="image">
                        <img src="/assets/file/uploads/63500937612121313141415151975575640Patient A.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>

    </section>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
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
    </script>