# 🌐 NOC Knowledge Base — Web Application Portal

![CodeIgniter 3](https://img.shields.io/badge/CodeIgniter-3.1.13-ef4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.2%2B-777bb4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap 5](https://img.shields.io/badge/Bootstrap-5.3.0-7952b3?style=for-the-badge&logo=bootstrap&logoColor=white)
![SweetAlert2](https://img.shields.io/badge/SweetAlert-2-ff6b6b?style=for-the-badge&logo=javascript&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479a1?style=for-the-badge&logo=mysql&logoColor=white)

> **Proyek Tugas Kuliah Pemrograman Web**  
> Aplikasi Web Mini Berbasis **CodeIgniter 3** dengan Implementasi Fitur **CRUD Artikel**, **Validasi Form**, dan **Notifikasi Interaktif**.

---

## 📖 Pengenalan Proyek (*About The Project*)

**NOC Knowledge Base** adalah aplikasi portal informasi web dinamis yang dirancang khusus untuk memenuhi kebutuhan dokumentasi teknis, *Standard Operating Procedure* (SOP), dan panduan *troubleshooting* jaringan pada divisi **Network Operation Center (NOC)**.

Aplikasi ini dibangun menggunakan arsitektur **MVC (Model-View-Controller)** dari framework CodeIgniter 3. Selain berfungsi sebagai pusat dokumentasi internal yang dapat diakses publik, web ini juga menyediakan layanan *feedback* interaktif guna menampung keluhan maupun masukan dari pengguna jaringan secara *real-time*.

---

## ✨ Fitur Utama (*Key Features*)

### 🖥️ 1. Portal Publik (*Public Facing*)
* **Daftar Artikel SOP & Panduan:** Menampilkan dokumentasi teknis terbaru dengan format ringkasan (*excerpt*) dan badge kategori yang mudah dibaca.
* **Halaman Baca Artikel Lengkap:** Fitur *read detail* artikel dengan URL bersih (*SEO-friendly slug*) dan tampilan bergaya web dokumentasi profesional.
* **Form Feedback Interaktif:** Form bagi pengunjung untuk mengirimkan laporan kendala atau saran langsung ke tim NOC.
<img width="1680" height="873" alt="image" src="https://github.com/user-attachments/assets/956486a9-1f8d-4aec-80b4-01fde4747683" />


### 🔐 2. Portal Admin (*Backend Management*)
* **Dashboard Stats:** Menampilkan indikator statistik hitung cepat (agregat database) untuk **Total Artikel** dan **Total Feedback Masuk**.
<img width="1680" height="871" alt="image" src="https://github.com/user-attachments/assets/b002fef9-b2d3-44c2-9680-ffafb635b0dd" />

* **Manajemen Artikel (CRUD):**
<img width="1680" height="866" alt="image" src="https://github.com/user-attachments/assets/f7013688-6bea-4015-80db-406ea591b1d9" />
<img width="1680" height="874" alt="image" src="https://github.com/user-attachments/assets/ef0b886a-9d0f-4e76-bd75-e86a4e354145" />

  * **Create:** Tambah artikel SOP baru.
  * **Read:** Tabel daftar artikel beserta status publikasinya.
  * **Update:** Edit konten, judul, dan kategori artikel.
  * **Delete:** Hapus artikel dari sistem.
* **Alur Kerja Publikasi (*Workflow*):** Opsi status **Draft** (simpan sementara) dan **Published** (tayangkan ke publik).
* **Manajemen Feedback:** Tabel log riwayat pesan dan masukan yang dikirim oleh pengguna dari halaman depan.
<img width="1680" height="874" alt="image" src="https://github.com/user-attachments/assets/3b69f86e-1450-4913-b952-1dbb5527564d" />



### 🛡️ 3. Validasi & Interaktivitas UI/UX
* **CodeIgniter Form Validation:** Proteksi berlapis pada form input (judul wajib diisi, minimal karakter, validasi format email sah, dll).
* **SweetAlert2 Notifications:** Pop-up alert interaktif dan elegan untuk pesan sukses simpan data, kirim feedback, dan **konfirmasi peringatan sebelum menghapus data** (*anti-human error*).
* **Template Partials Layout:** Struktur *views* yang dipisah secara modular (`head.php`, `side_nav.php`, `footer.php`) menghasilkan konsistensi antarmuka di seluruh halaman admin.
* **Clean URL (.htaccess):** Routing URL bersih tanpa embel-embel `index.php`.

---

## 🛠️ Teknologi yang Digunakan

| Komponen | Teknologi / Library |
| :--- | :--- |
| **Backend Framework** | [CodeIgniter 3.1.13](https://codeigniter.com/) (PHP Framework) |
| **Frontend Layout** | [Bootstrap 5.3.0](https://getbootstrap.com/) & CSS3 |
| **Database** | MySQL / MariaDB |
| **Icons** | [FontAwesome 6](https://fontawesome.com/) |
| **Interactive Alert** | [SweetAlert2](https://sweetalert2.github.io/) |
| **Web Server** | Apache (XAMPP Environment) |

---

## 🚀 Panduan Instalasi & Eksekusi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi secara lokal di komputer/laptop (*Localhost / XAMPP*):

### 1. Prasyarat Sistem
* Pastikan **XAMPP** sudah terinstal (PHP versi 7.4 atau PHP 8.2+ kompatibel).
* Web browser modern (Google Chrome / Microsoft Edge / Mozilla Firefox).

### 2. Clone / Unduh Repository
Unduh kode sumber proyek ini, lalu ekstrak foldernya dan letakkan ke dalam direktori *web root* XAMPP kamu:
```bash
# Clone via Git Terminal
cd C:\xampp\htdocs
git clone [https://github.com/username-kamu/noc-knowledge-base.git](https://github.com/username-kamu/noc-knowledge-base.git) noc_kb

```

*(Pastikan nama folder utama proyek di dalam htdocs bernama **`noc_kb`**).*

### 3. Setup Database MySQL

1. Buka XAMPP Control Panel, lalu aktifkan module **Apache** dan **MySQL**.
2. Buka browser dan masuk ke phpMyAdmin: `http://localhost/phpmyadmin`.
3. Buat database baru dengan nama tepat:
```text
noc_knowledge_base

```

4. Klik tab **Import**, pilih file **`noc_knowledge_base.sql`** yang ada di dalam folder utama proyek ini, lalu klik **Go / Kirim**.

### 4. Konfigurasi Aplikasi (*Opsional jika nama folder sama*)

Jika kamu mengubah nama folder proyek, sesuaikan *base URL* pada file konfigurasi:

* Buka file `application/config/config.php`.
* Pastikan baris konfigurasi berikut sudah sesuai:
```php
$config['base_url'] = 'http://localhost/noc_kb/';$config['index_page'] = ''; // Kosongkan agar clean URL aktif

```

### 5. Jalankan Aplikasi di Browser! 🎉

* **Halaman Publik (Beranda & Feedback):**
👉 `http://localhost/noc_kb/`
* **Halaman Admin (Dashboard & CRUD):**
👉 `http://localhost/noc_kb/admin/dashboard`
*(Atau klik tombol **"Login Admin"** yang terdapat pada pojok kanan atas di navigasi halaman publik).*

---

## 🗄️ Struktur Tabel Database

Aplikasi ini menggunakan 2 tabel utama pada database `noc_knowledge_base`:

### 1. Tabel `articles`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| `id` | INT (Auto Increment) | Primary Key |
| `title` | VARCHAR(255) | Judul Artikel / SOP |
| `slug` | VARCHAR(255) | URL SEO Friendly |
| `content` | TEXT | Isi lengkap panduan NOC |
| `category` | VARCHAR(100) | Kategori (misal: Routing, Hardware, Internal) |
| `status` | ENUM('draft', 'published') | Status penayangan artikel |
| `created_at` | TIMESTAMP | Waktu pembuatan data |

### 2. Tabel `feedbacks`

| Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| `id` | INT (Auto Increment) | Primary Key |
| `name` | VARCHAR(100) | Nama pengirim |
| `email` | VARCHAR(100) | Alamat email valid |
| `message` | TEXT | Pesan, saran, atau laporan kendala |
| `created_at` | TIMESTAMP | Waktu feedback dikirim |

---

## 👨‍💻 Identitas Pengembang / Tugas Kuliah

Proyek aplikasi web ini dibuat dan dikembangkan sebagai pemenuhan tugas mata kuliah **Pemrograman Web**:

| Keterangan | Detail |
| --- | --- |
| **Nama Mahasiswa** | **Kafka Syahrial Fauzan** |
| **Program Studi** | PJJ Informatika S1 |

---

*Copyright © 2026 — NOC Knowledge Base Portal. Built with CodeIgniter 3.*

