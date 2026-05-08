# Englishvit Clone — Programmer Intern Challenge

Clone tampilan homepage [englishvit.com](https://englishvit.com) menggunakan Laravel Blade dan Tailwind CSS v4, sebagai bagian dari Programmer Intern Challenge di PT Sinergi Insan Andalan.

---

## Tech Stack

| Layer | Teknologi |
|---|---|
| Backend Framework | Laravel 12.x |
| View | Laravel Blade |
| CSS Framework | Tailwind CSS v4 |
| Interaktivitas | Alpine.js v3 |
| Build Tool | Vite 6.x |
| Animasi | Lottie Player (npm) |
| Font | Inter + Sora (via @fontsource) |

---


## Persyaratan Sistem

- PHP >= 8.2
- Composer >= 2.x
- Node.js >= 18.x dan npm >= 9.x

  Catatan: Jika requirements belum tersedia atau versinya sudah usang (outdated), silahkan instal terlebih dahulu atau perbarui ke versi terbaru (sangat saya sarankan).

---

## Instalasi dan Penggunaan

### 1. Clone repository

```Bash
git clone https://github.com/muhammadzidane632/englishvit-clone-challenge.git
# Masuk Ke dalam Folder
cd englishvit-clone-challenge
```

### 2. Install dependencies

```bash
# Menginstal semua library/package PHP yang dibutuhkan proyek berdasarkan file composer.json
composer install

# Menginstal semua library JavaScript dan tools CSS (seperti Tailwind/Vite) berdasarkan file package.json
npm install

```

### 3. Setup environment

```bash
# Salin konfigurasi dari .env.example ke .env
cp .env.example .env

# Generate Application Key  (membuat key baru untuk enkripsi)
php artisan key:generate

# Membuat file database SQLite (sesuai konfigurasi default Laravel)
touch database/database.sqlite

# Menjalankan migrasi untuk membuat tabel-tabel di database
php artisan migrate 

```

### 4. Jalankan development server

Anda dapat menjalankan server Laravel dan Vite secara bersamaan dengan satu perintah berikut:

```bash
composer run dev 
```

**Alternatif:**
Jika ingin menjalankannya secara terpisah, gunakan dua terminal berbeda:

```bash
# Terminal 1: Menjalankan server Laravel
php artisan serve 
```

```bash
# Terminal 2: Menjalankan Vite (Wajib untuk memproses aset CSS/JS)
npm run dev
```

Setelah itu, buka browser dan akses `http://localhost:8000`.

---

## Struktur Proyek

```
resources/
├── css/
│   └── app.css                          # Design system (theme tokens, komponen, animasi)
├── js/
│   └── app.js                           # Entry point Alpine.js dan Lottie
└── views/
    ├── layouts/
    │   └── app.blade.php                # Layout utama
    ├── components/
    │   ├── navbar-desktop.blade.php
    │   ├── navbar-mobile.blade.php
    │   ├── bottom-navbar.blade.php
    │   ├── hero.blade.php
    │   ├── program-options.blade.php
    │   ├── program-recommendations.blade.php
    │   ├── testimonials.blade.php
    │   ├── partners.blade.php
    │   ├── promo.blade.php
    │   ├── benefits.blade.php
    │   ├── lottie-banner.blade.php
    │   ├── faq.blade.php
    │   ├── media-coverage.blade.php
    │   ├── cta-admin.blade.php
    │   ├── blogs.blade.php
    │   └── footer.blade.php
    └── landing.blade.php

public/
└── assets/                              # Gambar, ikon, animasi Lottie
```

---

## Design System

Semua token desain (warna, spacing, tipografi) didefinisikan terpusat di `resources/css/app.css` menggunakan `@theme {}` dari Tailwind CSS v4, sehingga langsung tersedia sebagai utility class di seluruh Blade template.

Contoh token yang tersedia:

| Jenis | Contoh |
|---|---|
| Warna | `bg-primary-7`, `text-info-7`, `bg-warning-7` |
| Tipografi | `text-ev-h1`, `text-ev-h2`, `text-ev-body` |
| Spacing | `p-ev-5`, `mb-ev-7`, `gap-ev-4` |

---

## Catatan

- Proyek ini adalah clone tampilan (frontend only), tidak ada database atau autentikasi aktif.
- Semua data (FAQ, kartu kursus, testimonial, blog) bersifat statis dan didefinisikan langsung di komponen Blade menggunakan `@php`.
- Font Inter dan Sora di-load secara lokal via `@fontsource` untuk menghindari request ke CDN eksternal.
- Menggunakan Tailwind CSS v4 dengan syntax `@import "tailwindcss"` dan `@theme {}`.

---

Referensi: [englishvit.com](https://englishvit.com)
