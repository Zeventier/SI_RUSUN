    <?php if (isset($model['error'])) {
        $message = $model['error'];
        echo "<script type='text/javascript'>alert('$message');</script>";
    } ?>

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
        <form id="submitHuni" method="post" action="/huni_rusun" enctype="multipart/form-data">

            <div class="tab">
                <h1 class="heading"> Syarat dan Ketentuan</h1>
                <div class="rule">
                    <h3>Berdasarkan PERDA <span>Nomor 2 Tahun 2009 Pasal 10</span>:</h3>
                    <div class="list">
                        <p><span>1. </span>
                            KTP dan Kartu Keluarga
                        </p>

                        <p><span>2. </span>
                            Memiliki pekerjaan tetap yang dibuktikan dengan:
                        <div class="bullet">
                            <ul>
                                <li>Surat Keterangan dari pimpinan bagi yang bekerja secara formal.</li>
                                <li>Surat Keterangan dari RT, Lurah, dan Camat bagi yang bekerja informal.</li>
                            </ul>
                        </div>
                        </p>

                        <p><span>3. </span>
                            Berpenghasilan rendah dengan pendapatan maksimal 2 (dua) kali UMP yang dibuktikan
                            dengan:
                        <div class="bullet">
                            <ul>
                                <li> Struk gaji yang ditandatangani oleh pengelola gaji bagi karyawan.</li>
                                <li> Rincian pendapatan bagi yang bukan karyawan yang diketahui RT, Lurah, dan Camat.</li>
                            </ul>
                        </div>
                        </p>

                        <p><span>4. </span>
                            Sudah berkeluarga atau menikah yang dibuktikan dengan Surat Nikah.
                        </p>

                        <p><span>5. </span>
                            Maksimal anggota keluarga 4.
                        </p>
                    </div>
                    <p class="semi-bold">
                        <i>*Sebelum lanjut, pastikan anda telah membaca Syarat dan Ketentuan di atas.</i>
                    </p>
                </div>

            </div>

            <div class="tab">
                <div>
                    <h1 class="heading"> Formulir Pengajuan Menghuni Rusun</h1>
                </div>

                <div class="rule">
                    <div class="list">
                        <div class="item">
                            <p>Nama Pemohon (Kepala Keluarga)</p>
                            <input type="text" pattern="^[a-zA-Z@ ]+$" autocapitalize="words" id="nama_pemohon" name="nama_pemohon" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $_POST['nama_pemohon'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Nomor Telepon</p>
                            <input type="text" maxlength="15" minlength="10" return false;" pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$" name="no_telp" oninput="this.value=this.value.replace(/(?![0-9+])./gmi,'')" value="<?php echo $_POST['no_telp'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Nomor Induk Kependudukan</p>
                            <input type="text" pattern="[0-9]" minlength="16" maxlength="16" name="nik_pemohon" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" value="<?php echo $_POST['nik_pemohon'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Nomor Kartu Keluarga</p>
                            <input type="text" pattern="[0-9]" minlength="16" maxlength="16" name="no_kk" oninput="this.value=this.value.replace(/(?![0-9+])./gmi,'')" value="<?php echo $_POST['no_kk'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Pekerjaan</p>
                            <input type="text" pattern="^[a-zA-Z@ ]+$" maxlength="50" name="kerja_pemohon" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $_POST['kerja_pemohon'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Kisaran Gaji Perbulan</p>
                            <select name="gaji_pemohon" required>
                                <option value="">Select</option>
                                <option value="Rp 0 - Rp 1.999.999,">Rp 0 - Rp 1.999.999,</option>
                                <option value="Rp 2.000.000, - Rp 3.999.999,">Rp 2.000.000, - Rp 3.999.999,</option>
                                <option value="Rp 4.000.000, - Rp 6.000.000,">Rp 4.000.000, - Rp 6.000.000,</option>
                            </select>
                        </div>
                        <div class="item">
                            <p>Jumlah Penghuni</p>
                            <input type="text" maxlength="1" oninput="this.value=this.value.replace(/(?![1-4])./gmi,'')" name="jlh_penghuni" value="<?php echo $_POST['jlh_penghuni'] ?? "" ?>" required />
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab">
                <div>
                    <h1 class="heading"> Formulir Pengajuan Menghuni Rusun</h1>
                </div>
                <div class="rule">
                    <div class="list">
                        <div class="item">
                            <p>Nama Pasangan</p>
                            <div class="item">
                                <input type="text" name="nama_psgn" pattern="^[a-zA-Z@ ]+$" maxlength="100" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $_POST['nama_psgn'] ?? "" ?>" required />
                            </div>
                        </div>
                        <div class="item">
                            <p>Pekerjaan Pasangan</p>
                            <input type="text" name="kerja_psgn" maxlength="50" onkeydown="return /[a-z ]/i.test(event.key)" value="<?php echo $_POST['kerja_psgn'] ?? "" ?>" required />
                        </div>
                        <div class="item">
                            <p>Kisaran Gaji Pasangan Perbulan</p>
                            <select name="gaji_psgn" required>
                                <option value="">Select</option>
                                <option value="Rp 0 - Rp 1.999.999,">Rp 0 - Rp 1.999.999,</option>
                                <option value="Rp 2.000.000, - Rp 3.999.999,">Rp 2.000.000, - Rp 3.999.999,</option>
                                <option value="Rp 4.000.000, - Rp 6.000.000,">Rp 4.000.000, - Rp 6.000.000,</option>
                            </select>
                        </div>
                        <div class="item">
                            <p>Pilih Ruangan</p>
                            <select name="ruangan" required>
                                <option value="">Select</option>
                                <?php if (isset($model['ruangan'])) {
                                    foreach ($model['ruangan'] as $value) {
                                        if ($value['Keterangan'] == 'Terisi' || $value['Keterangan'] == 'Rusak')
                                            continue;
                                        else
                                ?>
                                        <option value="<?php echo $value['kode_rusun'] ?>">Ruang <?php echo $value['no_ruang'] ?> - Lantai <?php echo $value['lantai'] ?></option>
                                    <?php }
                                } else {
                                    ?>
                                    <option value="">Tidak ada ruangan tersedia</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab">
                <div>
                    <h1 class="heading"> Formulir Pengajuan Menghuni Rusun</h1>
                </div>

                <div class="rule">
                    <div class="list">
                        <span>*Bagi pemohon yang ingin mengumpulkan berkas secara offline, maka tidak perlu mengisi formulir
                            pada
                            tahap ini.</span>
                        <div class="item">
                            <p>KTP Pemohon</p>
                            <input type="file" accept="image/*,.pdf" name="ktp_pmhn" />
                        </div>
                        <div class="item">
                            <p>KTP Pasangan</p>
                            <input type="file" accept="image/*,.pdf" name="ktp_psgn" />
                        </div>
                        <div class="item">
                            <p>Kartu Keluarga</p>
                            <input type="file" accept="image/*,.pdf" name="kartu_kk" />
                        </div>
                        <div class="item">
                            <p>Surat Keterangan Memiliki Pekerjaan Tetap</p>
                            <input type="file" accept="image/*,.pdf" name="srt_kerja" />
                        </div>
                        <div class="item">
                            <p>Struk/Rincian Gaji</p>
                            <input type="file" accept="image/*,.pdf" name="struk_gaji" />
                        </div>
                        <div class="item">
                            <p>Surat Nikah</p>
                            <input type="file" accept="image/*,.pdf" name="srt_nikah" />
                        </div>
                    </div>
                </div>

            </div>


            <div class="tab">
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
                            <i>*Informasi terkait permohonan yang diajukan paling lambat akan diumumkan 7 hari setelah permohonan
                                terkirim dan dapat diakses pada halaman <b>"Pengumuman"</b>.</i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="nav-rule">
                <p class="num-rule">Tahap <span id="tahap">1</span> dari 5</p>
                <div>
                    <button type="button" name="nextButtn" id="nextBtn" class="btn-rule" onclick="nextPrev(1)">Lanjut</button>
                    <button type="button" class="btn-cancel" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
                </div>
            </div>

        </form>
    </section>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            var tahap = document.getElementById("tahap");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if ((n + 1) == x.length) {
                document.getElementById("nextBtn").innerHTML = "Selesai";
            } else {
                document.getElementById("nextBtn").innerHTML = "Lanjut";
            }

            tahap.innerHTML = n + 1
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
            var x, y, z, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            z = x[currentTab].getElementsByTagName("select");

            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty... 
                if (y[i].value == "" && y[i].type != 'file') {
                    // add an "invalid" class to the field: 
                    y[i].className += " invalid";
                    // and set the current valid status to false: 
                    valid = false;
                }
            }

            for (i = 0; i < z.length; i++) {
                // If a field is empty... 
                if (z[i].value == "") {
                    // add an "invalid" class to the field: 
                    z[i].className += " invalid";
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
    <script src="/assets/js/script.js"></script>