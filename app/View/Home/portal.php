    <header class="header">
        <a href="#" class="logo">Portal<span>Rusun</span></a>
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

    <section class="login">
        <div class="form-input">
            <form method="post" action="/portal" class="login-form">
                <h3>LogIn Portal Rusun</h3>
                <input type="text" name="username" value="<?php echo $_POST['username'] ?? ""; ?>" placeholder="Username" class="box" required>
                <input type="password" name="password" placeholder="Password" class="box" required>
                <a href="portal-rusun.html"><button type="submit" class="btn">login</button></a>
                <div class="flex">
                    <a href="#" id="modal-btn">Lupa Password?</a>
                </div>
            </form>
        </div>

        <div id="modal-box" class="modal">
            <div class="modal-content">
                <span class="close"><i class="fas fa-times"></i></span>
                <p>Apabila anda melupakan <b>Password</b> dapat menghubungi admin pada nomor telpon dibawah
                </p>
                <div class="small-text"><i class="fab fa-whatsapp"></i> <b>Telepon/WA</b><br>+62 822 5086 6070</div>
            </div>

        </div>
    </section>

    <script src="js/script.js"></script>
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