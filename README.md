<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistem Gudang

Proyek ini adalah aplikasi manajemen gudang berbasis web yang dibangun menggunakan Laravel 10. Aplikasi ini menyediakan fitur untuk mengelola pengguna, barang, dan mutasi barang dalam gudang. API yang disediakan menggunakan autentikasi token (Bearer Token) dan dapat digunakan untuk operasi CRUD pada model.

## Prasyarat

Pastikan Anda telah menginstal software berikut di sistem Anda:

- [PHP](https://www.php.net/downloads) (versi 8.1 atau lebih baru)
- [Laravel](https://laravel.com) (versi 10)
- [Composer](https://getcomposer.org/download/) (untuk mengelola dependencies PHP)
- [MySQL](https://dev.mysql.com/downloads/) atau database lainnya yang didukung Laravel

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan proyek di lingkungan lokal Anda.

### 1. Clone Repository

Clone repository dari GitHub ke komputer lokal Anda:

bash
git clone https://github.com/Fentiagil/Sistem-Gudang.git
cd Sistem-Gudang

### 2. Install Dependensi Composer

Setelah berada di direktori proyek anda. Kemudian, install semua dependensi Laravel menggunakan Composer:

composer install

### 3. Menyalin File .env dan Konfigurasi

Laravel menggunakan file .env untuk konfigurasi lingkungan. Jika file .env tidak ada di repository, Anda bisa menyalin file contoh .env.example:

cp .env.example .env

### 4. Mengatur Kunci Aplikasi

Setelah menyalin file .env, Anda perlu mengatur kunci aplikasi Laravel menggunakan Artisan:

php artisan key:generate

### 5. Set Up Database

Edit file .env untuk mengonfigurasi pengaturan database Anda. Pastikan namanya sama.

### 6. Mengimpor File Database

Anda dapat mengimpor database berformat ".sql" ke dalam MySQL atau database yang Anda gunakan:

1. Buka phpMyAdmin atau gunakan MySQL command line.
2. Buat database baru sesuai dengan nama yang Anda masukkan di file .env.
3. Import file .sql ke dalam database yang baru saja dibuat.

### 7. Menjalankan Migrasi

Proyek ini menggunakan migration untuk membuat dan mengisi tabel database, Anda dapat menjalankannya dengan perintah:

php artisan migrate 

### 8. Jalankan Server Lokal

Anda dapat menjalankan server lokal menggunakan perintah Artisan Laravel: 

php artisan serve


## Link Postman

https://documenter.getpostman.com/view/25409723/2sAXjM4XY4 
