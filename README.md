# 🐾 FurryCare - Aplikasi Petshop & Petgrooming 🐾

Selamat datang di **FurryCare**! Aplikasi ini dirancang untuk memudahkan pengelolaan petshop dan layanan petgrooming Anda. Dengan FurryCare, Anda dapat dengan mudah melakukan pemesanan, manajemen pelanggan, dan pemantauan layanan grooming hewan peliharaan. Dibangun menggunakan bahasa PHP dengan Framework CodeIgniter 3 (CI3), aplikasi ini menawarkan kinerja yang cepat dan andal.

## ✨ Fitur Utama

- **Manajemen Pemesanan**: Buat, baca, perbarui, dan hapus (CRUD) pemesanan layanan grooming.
- **Manajemen Pelanggan**: Kelola data pelanggan dengan mudah.
- **Notifikasi**: Dapatkan pemberitahuan tentang jadwal grooming yang akan datang.
- **Pelaporan**: Lihat laporan bulanan mengenai pemesanan dan pendapatan.

## 🛠️ Teknologi yang Digunakan

- **Bahasa Pemrograman**: PHP
- **Framework**: CodeIgniter 3 (CI3)
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript

## 🚀 Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi FurryCare di lokal Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/FurryCare.git
   ```
2. **Masuk ke Direktori Proyek**
   ```bash
   cd FurryCare
   ```
3. **Konfigurasi Database**

   - Buat database baru di MySQL.
   - Import file `furrycare.sql` ke database yang baru dibuat.
   - Konfigurasikan koneksi database di `application/config/database.php`.

4. **Konfigurasi Base URL**

   - Sesuaikan base URL di `application/config/config.php`.

   ```php
   $config['base_url'] = 'http://localhost/FurryCare/';
   ```

5. **Menjalankan Aplikasi**
   - Akses aplikasi melalui browser:
   ```url
   http://localhost/FurryCare/
   ```

## 📝 Alur Pemesanan Pet Grooming

1. **Pelanggan Mendaftar/Login**

   - Pelanggan dapat mendaftar akun baru atau login jika sudah memiliki akun.

2. **Memilih Layanan Grooming**

   - Pelanggan memilih jenis layanan grooming yang diinginkan (misal: mandi, potong kuku, dll).

3. **Memilih Waktu dan Tanggal**

   - Pelanggan memilih waktu dan tanggal yang tersedia untuk layanan grooming.

4. **Konfirmasi Pemesanan**

   - Setelah memilih layanan dan waktu, pelanggan mengkonfirmasi pemesanan.

5. **Proses Grooming**

   - Petshop menerima pemesanan dan memproses layanan grooming sesuai jadwal.

6. **Notifikasi Selesai**
   - Pelanggan menerima notifikasi ketika layanan grooming telah selesai.

## 🎉 Terima Kasih!

Terima kasih telah menggunakan FurryCare! Kami berharap aplikasi ini dapat membantu Anda dalam mengelola petshop dan layanan grooming Anda dengan lebih mudah dan efisien.
