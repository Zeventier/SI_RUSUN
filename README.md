# Sistem Informasi Rusun(Rumah Susun)

## Tentang Aplikasi
Aplikasi ini diadakan untuk mempermudah pengguna Rumah Susun yang ada di Jalan R.E Martadinata No.1 Banjarmasin milik Dinas Perumahan dan Kawasan Permukiman Pemerintahan Kota Banjarmasin.
Aplikasi ini dirancang dengan menggunakan Figma dan diimplementasikan menggunakan Visual Studio Code dengan bahasa HTML, CSS, JavaScript, PHP dan menggunakan database MySQL.

## Cara Instalasi
Untuk dapat menginstal aplikasi berbasis web ini dibutuhkan web server apache dan sebuah database MySQL. Untuk mempermudah kita bisa menginstall [XAMPP](https://www.apachefriends.org/download.html)


1. Setelah XAMPP terinstall, buka aplikasi tersebut dan jalankan _service_ apache dan mysql 
2. Buka folder instalasi XAMPP, biasanya folder ini terdapat pada direktori root(direktori `C:/xampp` jika pada windows)
3. Download dan masukkan file SI_RUSUN ke dalam folder `htdocs` pada xampp
4. Jalankan browser dan buka halaman http://localhost/phpmyadmin untuk membuat database baru
5. Buat database baru tersebut dengan nama `db_rusun` 
6. Setelah berhasil, pilih database tersebut dan buka pada tab `sql` untuk menambahkan data yang dibutuhkan aplikasi
7. Copy isi dari file `db_rusun.sql` yang berada pada folder `SI_RUSUN` hasil unduhan tadi
8. Paste hasil copy tadi ke dalam kolom SQL Query, pastikan cekbox `Enable foreign key checks` pada kolom tidak tercentang. Lalu jalankan kueri dengan klik tombol `Go`
9. Setelah database terbuat dan terisi dengan data yang diperlukan kita perlu konfigurasi web server.
10. Buka aplikasi xampp, lalu pada _service_ Apache klik tombol config dan pilih Apache(httpd.conf) dan sebuah file akan terbuka pada teks editor
11. Cari dan temukan baris `DocumentRoot` dan ganti path yang ada pada tanda petik menjadi path ke folder SI_RUSUN, misalkan folder sirusun berada pada `C:\xampp\htdocs\si_rusun` maka ganti path dengan `C:\xampp\htdocs\si_rusun\public`
12. Ganti juga isi dari baris perintah <Directory ...>
13. Aplikasi siap dijalankan dan dapat dibuka pada alamat http://localhost
