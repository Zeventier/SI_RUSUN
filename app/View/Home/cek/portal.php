<?php if (isset($model['error'])) {
    $message = $model['error'];
    echo "<script type='text/javascript'>alert('$message');</script>";
} ?>

<header>
    <nav class="navbar navbar-light navbar-expand-md" style="background: var(--blue);">
        <div class="container-fluid"><a class="navbar-brand" href="/" style="color: var(--light);font-style: normal;font-weight: bold;">SI RUSUN</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/" style="color: var(--white);">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/huni_rusun" style="color: var(--white);">Huni Rusun</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pengumuman" style="color: var(--white);">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/portal" style="color: var(--white);font-weight: bold;">Portal
                            Rusun</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about" style="color: var(--white);">Tentang
                            Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="login-clean" style="background: rgba(241,247,252,0);">
        <form method="post" action="/portal" style="max-width: 492px;background: #eeeeee;">
            <h3 style="text-align: center;">LOGIN PORTAL RUSUN</h3>
            <div class="form-group"><input class="form-control" type="text" placeholder="Username" name="username" value="<?= $_POST['username'] ?? '' ?>"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group d-xl-flex justify-content-xl-center"><button class="btn btn-primary btn-block" type="submit" style="background: var(--blue);width: 191px;margin-top: 0px;">Log In</button></div><a class="forgot" href="#">Lupa password?</a>
        </form>
    </section>
</main>