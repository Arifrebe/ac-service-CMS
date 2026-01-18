# CMS Project

CMS (Content Management System) berbasis **Laravel** yang sedang dikembangkan untuk kebutuhan pembelajaran dan pengembangan sistem manajemen konten dengan panel administrasi.

Proyek ini masih berada pada tahap awal dan akan terus dikembangkan secara bertahap.

---

## 🎯 Tujuan Proyek
- Membangun CMS dengan struktur kode yang rapi dan terorganisir
- Menerapkan autentikasi dan proteksi akses panel
- Menjadi sarana pembelajaran Laravel secara praktik nyata

---

## ✨ Fitur (Saat Ini)
- Sistem login
- Fitur *remember me*
- Proteksi panel menggunakan middleware autentikasi
- Tampilan admin panel berbasis AdminLTE
- Modul member (tahap awal)

> Fitur tambahan akan dicatat seiring perkembangan proyek.

---

## 🛠️ Tech Stack
- **Framework**: Laravel
- **Database**: MySQL
- **Template Engine**: Blade
- **Admin Panel**: AdminLTE
- **Version Control**: Git

---

## 🚀 Installation & Setup

### 1. Clone Repository
```
git clone <repository-url>
cd cms-project
```

### 2. Install Dependency
```
composer install
```

### 3. Konfigurasi Environment
Salin file `.env.example` :
```
cp .env.example .env
```
Sesuaikan konfigurasi database pada file `.env`.

### 4. Generate Application Key
```
php artisan key:generate
```

### 5. Migrasi Database
```
php artisan migrate
```

### 6. Jalankan Aplikasi
```
php artisan serve
```
Akses aplikasi melalui: http://127.0.0.1:8000

## Status Pengembangan
Proyek ini masih dalam tahap awal pengembangan.
Perubahan dan penambahan fitur akan dicatat pada file:

`CHANGELOG.md` → ringkasan perubahan

## Status Pengembangan
Proyek ini masih dalam tahap awal pengembangan dan belum ditujukan untuk penggunaan produksi.
