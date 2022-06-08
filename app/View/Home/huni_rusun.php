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
                    <li class="nav-item"><a class="nav-link active" href="/huni_rusun" style="color: var(--white);font-weight: bold;">Huni Rusun</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pengumuman" style="color: var(--white);">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portal" style="color: var(--white);">Portal
                            Rusun</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about" style="color: var(--white);">Tentang
                            Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section>
        <form id="submitHuni" method="post" action="/huni_rusun" enctype="multipart/form-data">
            <div class="tab">
                <div class="container" style="margin-top: 56px;width: 1055px;background: rgba(235,239,241,0);border-radius: 0px;">
                    <div class="row" style="border-radius: 0px;">
                        <div class="col-md-12" style="margin-top: 0px;padding-right: 30px;padding-left: 30px;background: #ebeff1;border-radius: 10px;">
                            <h2 style="text-align: center;margin-top: 31px;">SYARAT DAN KETENTUAN</h2>
                            <p style="margin-bottom: 3px;">Berdasarkan Perda Nomor 2 Tahun 2009 Pasal 10:<br></p>
                            <ol style="padding-left: 20px;margin-bottom: 24px;">
                                <li>KTP dan Kartu Keluarga<br></li>
                                <li>Memiliki pekerjaan tetap yang dibuktikan dengan:<br>
                                    <ul style="padding-left: 23px;">
                                        <li>Surat Keterangan dari pimpinan bagi yang bekerja secara formal.<br></li>
                                        <li>Surat Keterangan dari RT, Lurah, dan Camat bagi yang bekerja
                                            informal.<br>
                                        </li>
                                    </ul>
                                </li>
                                <li>Berpenghasilan rendah dengan pendapatan maksimal 2 (dua) kali UMP yang
                                    dibuktikan
                                    dengan:<br>
                                    <ul style="padding-left: 23px;">
                                        <li>Struk gaji yang ditandatangani oleh pengelola gaji bagi karyawan.<br>
                                        </li>
                                        <li>Rincian pendapatan bagi yang bukan karyawan yang diketahui RT, Lurah,
                                            dan
                                            Camat.<br></li>
                                    </ul>
                                </li>
                                <li>Sudah berkeluarga atau menikah yang dibuktikan dengan Surat Nikah.<br></li>
                                <li>Maksimal anggota keluarga 4.<br></li>
                            </ol>
                            <p style="margin-bottom: 31px;">Sebelum lanjut, pastikan anda telah membaca Syarat dan
                                Ketentuan
                                di atas.<br></p>
                            <input value="terisi" hidden>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
                        <div class="col d-xl-flex">
                            <p style="padding: 6px 12px;margin-bottom: 0px;width: 187.8438px;text-align: center;background: var(--blue);color: var(--light);border-radius: 51px;">
                                Tahap 1 dari 4</p>
                        </div>
                        <div class="col d-flex align-self-end justify-content-xl-end">
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;margin-right: 16px;background: rgb(0,41,255);" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab">
                <div class="container" style="margin-top: 56px; width: 1055px; background: rgba(235, 239, 241, 0); border-radius: 13px;">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 0px; padding-right: 30px; padding-left: 30px; background: #ebeff1;border-radius: 10px;">
                            <h2 style="text-align: center; margin-top: 31px; margin-bottom: 20px">
                                FORMULIR PENGAJUAN MENGHUNI RUSUN
                            </h2>
                            <form>
                                <label style="margin-bottom: 2px">Nama Pemohon (Kepala Keluarga)</label>
                                <input class="form-control" type="text" name="nama_pemohon" style="border-radius: 10px; margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">Nomor Telepon</label>
                                <input class="form-control" type="number" name="no_telp" style="border-radius: 10px; margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">NIK Pemohon</label>
                                <input class="form-control" type="number" name="nik_pemohon" style="border-radius: 10px; margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">Nomor KK</label>
                                <input class="form-control" type="number" name="no_kk" style="border-radius: 10px; margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">Pekerjaan</label>
                                <input class="form-control" type="text" name="kerja_pemohon" style="border-radius: 10px; margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">Kisaran Gaji Per Bulan</label>
                                <input class="form-control" type="number" name="gaji_pemohon" style="margin-bottom: 8px" required />

                                <label style="margin-bottom: 2px">Jumlah Penghuni</label>
                                <input class="form-control" type="number" name="jlh_penghuni" style="margin-bottom: 30px" required />
                            </form>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
                        <div class="col d-xl-flex">
                            <p style="padding: 6px 12px; margin-bottom: 0px; width: 187.8438px; text-align: center; 
                                background: var(--blue); color: var(--light); border-radius: 51px;">
                                Tahap 2 dari 4
                            </p>
                        </div>
                        <div class="col d-flex align-self-end justify-content-xl-end">
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;margin-right: 16px;background: rgb(0,41,255);" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab">
                <div class="container" style="margin-top: 56px;width: 1055px;background: rgba(235,239,241,0);border-radius: 13px;">
                    <div class="row">
                        <div class="col" style="background: #ebeff1;margin-right: 71px;border-radius: 10px;height: 603px;">
                            <h4 style="text-align: center;margin-top: 31px;">DAFTAR RUANGAN TERSEDIA</h4>
                            <h5 style="text-align: center;margin-top: -3px;">Lantai 3</h5>
                            <div style="text-align: center;margin-bottom: 8px;padding-right: 50px;padding-left: 50px;">
                                <i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;margin-right: 8px;"></i>
                            </div>
                            <h5 style="text-align: center;margin-top: -3px;">Lantai 2</h5>
                            <div style="text-align: center;margin-bottom: 8px;padding-right: 50px;padding-left: 50px;">
                                <i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;margin-right: 8px;"></i>
                            </div>
                            <h5 style="text-align: center;margin-top: -3px;">Lantai 1</h5>
                            <div style="text-align: center;margin-bottom: 8px;padding-right: 50px;padding-left: 50px;">
                                <i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;margin-right: 8px;"></i>
                            </div>
                            <div class="d-flex align-content-center align-self-end justify-content-xl-center align-items-xl-center">
                                <i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--blue);font-size: 46px;"></i>
                                <p style="margin-bottom: 0px;margin-right: 10px;margin-left: 4px;">Kosong</p><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--green);font-size: 46px;"></i>
                                <p style="margin-bottom: 0px;margin-right: 10px;margin-left: 4px;">Terisi</p><i class="fa fa-square" style="background: rgba(0,123,255,0);color: var(--red);font-size: 46px;"></i>
                                <p style="margin-bottom: 0px;margin-right: 10px;margin-left: 4px;">Rusak</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6" style="margin-top: 0px;padding-right: 30px;padding-left: 30px;background: #ebeff1;border-radius: 10px;">
                            <h4 style="text-align: center;margin-top: 31px;">FORMULIR PENGAJUAN MENGHUNI RUSUN</h4>
                            <form style="margin-top: 20px;">
                                <label style="margin-bottom: 2px;">Nama Pasangan</label>
                                <input class="form-control" type="text" name="nama_psgn" style="border-radius: 10px;margin-bottom: 8px;" required>

                                <label style="margin-bottom: 2px;">Pekerjaan Pasangan</label>
                                <input class="form-control" type="text" name="kerja_psgn" style="border-radius: 10px;margin-bottom: 8px;" required>

                                <label style="margin-bottom: 2px;">Kisaran Gaji Pasangan Per Bulan</label>
                                <input class="form-control" type="number" name="gaji_psgn" style="margin-bottom: 8px;" required>

                                <label style="margin-bottom: 2px;">Pilih Ruangan</label>
                                <select class="form-control" name="ruangan" style="margin-bottom: 8px;" required>
                                    <optgroup label="This is a group">
                                        <option value="1" selected="">Ruang 1</option>
                                        <option value="2">Ruang 2</option>
                                        <option value="3">Ruang 3</option>
                                    </optgroup>
                                </select>

                                <label style="margin-bottom: 2px;">Pilih Metode Pengumpulan Berkas</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metodeBerkas" id="online-radio" value="online" oninput="changeTabNameOnline()" checked>
                                    <label class="form-check-label" for="online-radio">
                                        Online
                                    </label>
                                </div>
                                <div class="form-check" style="margin-bottom: 20px;">
                                    <input class="form-check-input" type="radio" name="metodeBerkas" id="offline-radio" value="offline" oninput="changeTabNameOffline()">
                                    <label class="form-check-label" for="offline-radio">
                                        Langsung
                                        (dikumpulkan pada saat wawancara)
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row float-right d-xl-flex" style="margin-top: 30px;margin-bottom: 30px;width: 526px;">
                        <div class="col d-xl-flex">
                            <p style="padding: 6px 12px;margin-bottom: 0px;width: 187.8438px;text-align: center;background: var(--blue);color: var(--light);border-radius: 51px;">
                                Tahap 3 dari 4</p>
                        </div>
                        <div class="col d-flex align-self-end justify-content-xl-end">
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;margin-right: 16px;background: rgb(0,41,255);" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="huni-opt" class="tab">
                <div class="container" style="margin-top: 56px;width: 1055px;background: rgba(235,239,241,0);border-radius: 13px;">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 0px;padding-right: 30px;padding-left: 30px;background: #ebeff1;border-radius: 10px;">
                            <h2 style="text-align: center;margin-top: 31px;">FORMULIS PENGAJUAN MENGHUNI RUSUN</h2>
                            <form style="margin-top: 20px;">
                                <label style="margin-bottom: 2px;">KTP Pemohon</label>
                                <input class="form-control-file" name="ktp_pmhn" type="file" style="margin-bottom: 8px;background: rgb(255,255,255);">

                                <label style="margin-bottom: 2px;">KTP Pasangan</label>
                                <input class="form-control-file" name="ktp_psgn" type="file" style="margin-bottom: 8px;background: #ffffff;">

                                <label style="margin-bottom: 2px;">Kartu Keluarga</label>
                                <input class="form-control-file" name="kartu_kk" type="file" style="margin-bottom: 8px;background: #ffffff;">

                                <label style="margin-bottom: 2px;">Surat Keterangan Memiliki Pekerjaan Tetap</label>
                                <input class="form-control-file" name="srt_kerja" type="file" style="margin-bottom: 8px;background: #ffffff;">

                                <label style="margin-bottom: 2px;">Surat/Rincian Gaji</label>
                                <input class="form-control-file" name="struk_gaji" type="file" style="margin-bottom: 8px;background: #ffffff;">

                                <label style="margin-bottom: 2px;">Surat Nikah</label>
                                <input class="form-control-file" name="srt_nikah" type="file" style="margin-bottom: 30px;background: #ffffff;">
                            </form>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
                        <div class="col d-xl-flex">
                            <p style="padding: 6px 12px;margin-bottom: 0px;width: 187.8438px;text-align: center;background: var(--blue);color: var(--light);border-radius: 51px;">
                                Tahap 3 dari 4</p>
                        </div>
                        <div class="col d-flex align-self-end justify-content-xl-end">
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;margin-right: 16px;background: rgb(0,41,255);" id="nextBtn" onclick="nextPrev(1)">Lanjut</button>
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab">
                <div class="container" style="margin-top: 56px;width: 1055px;background: rgba(235,239,241,0);border-radius: 0px;">
                    <div class="row" style="border-radius: 0px;">
                        <div class="col-md-12" style="margin-top: 0px;padding-right: 30px;padding-left: 30px;background: #ebeff1;border-radius: 10px;">
                            <h2 style="text-align: center;margin-top: 31px;">FORMULIR PENGAJUAN MENGHUNI RUSUN</h2>
                            <p style="margin-bottom: 3px;">Anda telah berada di tahap terakhir pengajuan menghuni
                                rusun.
                                Sebelum menyelesaikan tahapan ini, pastikan anda telah membaca ketentuan
                                berikut:<br><br>Untuk Pemohon yang mengumpulkan fotokopi berkas secara langsung,
                                dimohon
                                agar membawa berkas berikut pada saat wawancara (yang telah dijelaskan pada tahap
                                1):<br>
                            </p>
                            <ol style="padding-left: 20px;margin-bottom: 24px;">
                                <li>KTP Pemohon dan KTP Pasangan<br></li>
                                <li>Kartu Keluarga<br></li>
                                <li>Surat Keterangan Memiliki Pekerjaan Tetap<br></li>
                                <li>Struk/Rincian Gaji<br></li>
                                <li>Surat Nikah<br></li>
                            </ol>
                            <p style="margin-bottom: 31px;">Pastikan data yang anda isikan pada formulir ini sudah
                                tepat.
                                Apabila anda telah yakin, silahkan tekan tombol “Selesai”.<br></p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
                        <div class="col d-xl-flex">
                            <p style="padding: 6px 12px;margin-bottom: 0px;width: 187.8438px;text-align: center;background: var(--blue);color: var(--light);border-radius: 51px;">
                                Tahap 4 dari 4</p>
                        </div>
                        <div class="col d-flex align-self-end justify-content-xl-end">
                            <button class="btn btn-primary" name="nextButtn" type="button" style="width: 94.0781px;border-radius: 11px;margin-right: 16px;background: rgb(0,41,255);" onclick="nextPrev(1)">Selesai</button>
                            <button class="btn btn-primary" type="button" style="width: 94.0781px;border-radius: 11px;" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("submitHuni").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty... 
            if (y[i].value == "") {
                // add an "invalid" class to the field: 
                y[i].className += " invalid";
                // and set the current valid status to false: 
                valid = false;
            }
        }

        return valid; // return the valid status
    }

    function changeTabNameOnline() {
        tab = document.getElementById("huni-opt");
        tab.className = "tab";
    }

    function changeTabNameOffline() {
        tab = document.getElementById("huni-opt");
        tab.className = "skip";
    }

    function showError(message) {
        alert(message);
    }
</script>