# SIAKAD PNP — Sistem Informasi Akademik

> Aplikasi web berbasis **Laravel** untuk pengelolaan data akademik Politeknik Negeri Padang, meliputi data Mahasiswa, Dosen, dan Program Studi.

---

## 📋 Fitur Utama

| Modul | Fitur |
|-------|-------|
| 🏠 **Home** | Dashboard utama dengan ringkasan navigasi ke seluruh modul |
| 👥 **Mahasiswa** | Lihat, tambah, edit, dan hapus data mahasiswa beserta NIM, Prodi, dan IPK |
| 🪪 **Dosen** | Lihat daftar dosen dengan NIDN, email, dan program studi yang diampu |
| 📚 **Prodi** | Lihat daftar program studi aktif beserta kode prodi dan kepala prodi |

---

## 🗂️ Struktur Halaman

```
/              → Home (Dashboard)
/mahasiswa     → Daftar Mahasiswa (dengan pagination)
/mahasiswa/tambah   → Tambah Mahasiswa Baru
/mahasiswa/edit/{id} → Edit Data Mahasiswa
/mahasiswa/delete/{id} → Hapus Data Mahasiswa
/dosen         → Daftar Dosen (dengan pagination)
/prodi         → Daftar Program Studi (dengan pagination)
```

---

## 🛠️ Teknologi

- **Framework**: Laravel (PHP)
- **Database**: SQLite / MySQL
- **Frontend**: Bootstrap 5.3, Bootstrap Icons
- **Font**: Plus Jakarta Sans, DM Mono (Google Fonts)
- **Template Engine**: Blade

---

## 🚀 Instalasi & Menjalankan

### 1. Clone atau salin project

```bash
cd D:\Laravel\pemograman_kedua\belajar-laravel2
```

### 2. Install dependensi PHP

```bash
composer install
```

### 3. Salin file environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi database

Edit file `.env` sesuai konfigurasi database lokal Anda:

```env
DB_CONNECTION=sqlite
# atau untuk MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan migrasi

```bash
php artisan migrate
```

### 6. (Opsional) Jalankan seeder

```bash
php artisan db:seed
```

### 7. Jalankan server lokal

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

---

## 📁 Struktur Views

```
resources/views/
├── layouts/
│   ├── main.blade.php       ← Layout utama (HTML, navbar, footer)
│   ├── header.blade.php     ← Navigasi atas
│   └── footer.blade.php     ← Footer
├── home.blade.php            ← Halaman beranda
├── mahasiswa/
│   └── mahasiswa.blade.php  ← Tabel daftar mahasiswa
├── dosen/
│   └── dosen.blade.php      ← Tabel daftar dosen
└── prodi/
    └── prodi.blade.php      ← Tabel daftar program studi
```

---

## 🗄️ Model & Controller

| Model | Controller | Fungsi |
|-------|-----------|--------|
| `Mahasiswa` | `MahasiswaController` | CRUD data mahasiswa, pagination |
| `Dosen` | `DosenController` | Tampil daftar dosen, pagination |
| `Prodi` | `ProdiController` | Tampil daftar prodi, pagination |

---

## 🎨 Desain UI

Tampilan menggunakan desain modern dengan:
- **Navbar** gelap dengan ikon dan active state otomatis
- **Tabel** dengan avatar inisial warna, badge prodi, dan warna IPK
- **Hero section** bergradient di halaman Home
- **Card** statistik dan fitur di dashboard
- Warna IPK otomatis: 🟢 ≥ 3.5 | 🟡 ≥ 2.75 | 🔴 < 2.75

---

## 👨‍💻 Pengembang

Dibuat sebagai project belajar Laravel — Politeknik Negeri Padang © {{ date('Y') }}
