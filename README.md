<div align="center">

# 🇬🇧 Englishvit Clone

**Programmer Intern Challenge — PT Sinergi Insan Andalan**

Clone tampilan homepage [Englishvit.com](https://englishvit.com) menggunakan Laravel Blade & Tailwind CSS v4.

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-v3-77C1D2?style=flat-square&logo=alpine.js&logoColor=white)](https://alpinejs.dev)
[![Vite](https://img.shields.io/badge/Vite-6.x-646CFF?style=flat-square&logo=vite&logoColor=white)](https://vitejs.dev)

</div>

---

## 📌 Tentang Proyek

Proyek ini merupakan hasil pengerjaan **Programmer Intern Challenge** dari PT Sinergi Insan Andalan. Tugasnya adalah membuat ulang (clone) tampilan homepage [Englishvit.com](https://englishvit.com) dengan ketentuan wajib menggunakan **Laravel (Blade)** dan **Tailwind CSS**, serta tampilan harus rapi dan responsif baik di **desktop maupun mobile**.

---

## 🧱 Tech Stack

| Layer | Teknologi |
|---|---|
| Backend Framework | Laravel 12.x |
| Templating Engine | Laravel Blade |
| CSS Framework | Tailwind CSS v4 |
| UI Interaktif | Alpine.js v3 |
| Build Tool | Vite 6.x |
| Animasi | Lottie Player (npm) |
| Font | Inter + Sora (via `@fontsource`) |

---

## ✅ Fitur yang Diimplementasikan

- [x] **Navbar Desktop** — navigasi horizontal dengan dropdown "Daftar Kursus"
- [x] **Navbar Mobile** — hamburger menu dengan sliding panel dari kanan
- [x] **Bottom Navigation Bar** — navigasi bawah layar khusus mobile/tablet
- [x] **Hero Section** — headline, sub-teks, tombol CTA (Daftar & WhatsApp Admin)
- [x] **Pilihan Program** — kartu program (Live Class, Learning Package, dll)
- [x] **Program Rekomendasi** — carousel kartu kursus dengan dot navigation
- [x] **Testimonials** — carousel ulasan pelanggan
- [x] **Partners / Sponsor** — infinite scroll marquee logo partner
- [x] **Special Promo** — banner promo spesial
- [x] **Why Englishvit (Benefits)** — section keunggulan dengan ikon
- [x] **Lottie Banner** — animasi interaktif menggunakan Lottie
- [x] **FAQ Section** — accordion interaktif dengan Alpine.js
- [x] **Media Coverage** — marquee media yang meliput Englishvit
- [x] **CTA Admin** — call-to-action untuk menghubungi admin
- [x] **Blog Section** — preview artikel blog terbaru
- [x] **Footer** — info perusahaan, navigasi, download app, social media
- [x] **Favicon** — favicon resmi Englishvit terintegrasi

---

## 🖥️ Prasyarat

Pastikan sudah terinstall di mesin kamu:

- **PHP** >= 8.2
- **Composer** >= 2.x
- **Node.js** >= 18.x & **npm** >= 9.x
- **Git**

---

## ⚙️ Cara Instalasi & Menjalankan

### 1. Clone Repository

```bash
git clone https://github.com/muhammadzidane632/englishvit-clone-challenge.git
cd englishvit-clone-challenge
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies Node.js

```bash
npm install
```

### 4. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Jalankan Development Server

Buka **dua terminal** secara bersamaan:

**Terminal 1 — Laravel Server:**
```bash
php artisan serve
```

**Terminal 2 — Vite Dev Server (Tailwind + HMR):**
```bash
npm run dev
```

### 6. Buka di Browser

```
http://localhost:8000
```

---

## 📁 Struktur Proyek

```
resources/
├── css/
│   └── app.css                          # Design system (theme tokens, komponen, animasi)
├── js/
│   └── app.js                           # Entry point Alpine.js & Lottie
└── views/
    ├── layouts/
    │   └── app.blade.php                # Layout utama (head, navbar, body)
    ├── components/
    │   ├── navbar-desktop.blade.php     # Navbar horizontal (md ke atas)
    │   ├── navbar-mobile.blade.php      # Hamburger menu + sliding panel
    │   ├── bottom-navbar.blade.php      # Bottom nav bar mobile/tablet
    │   ├── hero.blade.php               # Hero section
    │   ├── program-options.blade.php    # Pilihan program
    │   ├── program-recommendations.blade.php  # Carousel rekomendasi
    │   ├── testimonials.blade.php       # Carousel testimonial
    │   ├── partners.blade.php           # Marquee logo partner
    │   ├── promo.blade.php              # Banner promo spesial
    │   ├── benefits.blade.php           # Why Englishvit
    │   ├── lottie-banner.blade.php      # Animasi Lottie
    │   ├── faq.blade.php                # FAQ accordion
    │   ├── media-coverage.blade.php     # Marquee media coverage
    │   ├── cta-admin.blade.php          # CTA hubungi admin
    │   ├── blogs.blade.php              # Preview blog
    │   └── footer.blade.php             # Footer lengkap
    └── landing.blade.php                # View utama landing page

public/
└── assets/                              # Gambar, ikon, dan animasi Lottie
```

---

## 🎨 Design System

Proyek ini menggunakan **design system terpusat** di `resources/css/app.css` melalui Tailwind CSS v4 `@theme {}`. Semua nilai bisa langsung dipakai sebagai utility class Tailwind:

| Token | Contoh Class |
|---|---|
| Warna Primary | `bg-primary-7`, `text-primary-8` |
| Warna Info | `bg-info-7`, `text-info-7` |
| Warna Warning | `bg-warning-7` |
| Tipografi | `text-ev-h1`, `text-ev-h2`, `text-ev-body` |
| Spacing | `p-ev-5`, `mb-ev-7`, `gap-ev-4` |
| Komponen | `.ev-recommendation-card`, `.ev-btn-primary` |

---

## 📝 Catatan Tambahan

- Proyek ini adalah **clone tampilan (frontend only)** — tidak ada database atau autentikasi aktif.
- Semua data (FAQ, kartu kursus, testimonial, blog, dll) bersifat **statis** dan didefinisikan langsung di komponen Blade menggunakan `@php`.
- Font **Inter** dan **Sora** di-load secara **lokal** via paket `@fontsource` (bukan CDN) untuk performa dan privasi yang lebih baik.
- Animasi banner menggunakan **Lottie Player** yang di-install sebagai npm package, bukan CDN.
- Proyek menggunakan **Tailwind CSS v4** dengan syntax modern `@import "tailwindcss"` dan `@theme {}`.
- Interaktivitas FAQ accordion menggunakan **Alpine.js** dengan plugin `x-collapse`.

---

## 👤 Author

**Muhammad Zidan**
Programmer Intern Candidate
PT Sinergi Insan Andalan

---

*Referensi: [englishvit.com](https://englishvit.com)*
