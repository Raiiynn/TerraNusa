# TerraNusa

**Repo:** Raiiynn/TerraNusa

## Ringkasan

TerraNusa adalah aplikasi website perjalanan (travel) yang dibangun terutama menggunakan **PHP** (server-side), dengan sedikit HTML dan JavaScript untuk bagian front-end. Repo ini juga menyertakan berkas SQL untuk skema database dan file konfigurasi Docker untuk menjalankan aplikasi secara containerized.

> Catatan: README ini dibuat berdasarkan struktur file yang ada di repo (index.php, Dockerfile, docker-compose.yaml, terranusa.sql, dsb.).

---

## Teknologi

* PHP (majority of the codebase)
* HTML
* JavaScript
* Docker / docker-compose (opsional untuk menjalankan container)
* MySQL (atau MariaDB) — database yang dibawa dalam `terranusa.sql`

---

## Fitur utama

* Halaman utama (`index.php`) dan beberapa halaman paket perjalanan (mis. `paket_travel.php`, `paket_adventure.php`, `paket_citytour.php`, dsb.)
* Pendaftaran dan profil pengguna (`register.php`, `profile.php`)
* Manajemen pemesanan (`pemesanan.html`, `my-bookings.php`, `riwayat-pemesanan.html`)
* Sistem pembayaran / halaman pembayaran (`payment.php`)
* Skrip bantu seperti `hash_password.php` (hashing password)
* File SQL `terranusa.sql` untuk import struktur/data awal
* Dockerfile + docker-compose.yaml untuk containerized deployment

---

## Struktur file (ringkasan)

Berikut ini adalah beberapa file dan folder penting di repo:

```
/ (root)
├─ Dockerfile
├─ docker-compose.yaml
├─ index.php
├─ register.php
├─ profile.php
├─ logout.php
├─ payment.php
├─ my-bookings.php
├─ paket_travel.php
├─ paket_adventure.php
├─ paket_citytour.php
├─ paket_nature.php
├─ paket_premium.php
├─ paket_merapiadventure.php
├─ paket_pantaiselatan.php
├─ terranusa.sql
├─ script.js
├─ hash_password.php
├─ test_connection.php
├─ admin/ (folder)
├─ auth/ (folder)
├─ includes/ (folder)
├─ views/ (folder)
└─ gambar/ (asset images)
```

(Ukuran dan daftar file lengkap bisa dilihat langsung di repo.)

---

## Syarat & Pra-persiapan

* PHP 8.0+ (disarankan) dengan ekstensi PDO/MySQL
* Web server: Apache atau Nginx
* MySQL / MariaDB
* (Opsional) Docker & docker-compose bila ingin menjalankan dengan container

---

## Cara cepat (menggunakan Docker)

> Dockerfile dan `docker-compose.yaml` tersedia di repo — cara ini memudahkan menjalankan aplikasi tanpa konfigurasi manual.

1. Pastikan Docker dan docker-compose terpasang.
2. Jalankan:

```bash
docker-compose up --build -d
```

3. Akses aplikasi melalui `http://localhost` (atau port yang ditentukan di docker-compose).

> Jika butuh bantuan men-tweak `docker-compose.yaml` (mis. mengatur port, volume atau variabel environment), edit file tersebut lalu jalankan ulang `docker-compose up --build`.

---

## Cara manual (tanpa Docker)

1. Copy semua file ke `htdocs` (Apache) atau ke folder root situs pada server Anda.
2. Konfigurasi virtual host (Apache/Nginx) menunjuk ke lokasi repo.
3. Import database:

```bash
mysql -u root -p your_database_name < terranusa.sql
```

4. Buat file konfigurasi environment (atau sesuaikan `includes`/file koneksi) dengan variabel database Anda:

```
DB_HOST=localhost
DB_NAME=terranusa
DB_USER=root
DB_PASS=secret
```

5. Pastikan PHP memiliki ekstensi PDO/MySQL.

---

## Variabel environment yang disarankan

Repositori tidak mengandung `.env` secara langsung, jadi siapkan variabel environment (atau file konfigurasi) untuk:

* DB_HOST
* DB_NAME
* DB_USER
* DB_PASS
* BASE_URL (opsional)

---

## Keamanan & rekomendasi

* Jangan menyimpan kredensial sensitif langsung ke repo.
* Gunakan prepared statements (PDO) untuk semua query yang menerima input dari user.
* Pastikan password disimpan hashed (lihat `hash_password.php`).
* Validasi dan sanitasi semua input user, terutama pada endpoint pemesanan dan pembayaran.
* Jika men-deploy ke publik, gunakan HTTPS.

---

## Testing koneksi

Gunakan `test_connection.php` (jika tersedia) untuk memeriksa konfigurasi DB dan koneksi awal.

---

## Kontribusi

1. Fork repo
2. Buat branch baru `feature/your-feature`
3. Commit perubahan dan push
4. Buka pull request dengan deskripsi perubahan

---

## Kontak

Jika butuh bantuan lebih lanjut (penyetingan Docker, debugging error, atau penambahan README), hubungi pemilik repo.

---