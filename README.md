<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

=======
# E-commerce with Laravel

Project ini adalah aplikasi website E-commerce yang dibangun menggunakan Laravel. Website ini dirancang untuk memungkinkan pengguna melakukan transaksi jual beli online dengan berbagai fitur seperti:

- Manajemen kategori dan subkategori produk
- Autentikasi login dan registrasi ubtuk user
- Pengelolaan produk dan gambar
- Fitur admin untuk kontrol penuh atas konten
- Fitur Payment Gateway

## Prerequisites

- PHP 7.4 or higher
- Composer 2.4.1
- Laravel  8
- MySQL atau database lain yang didukung oleh Laravel
- Laragon (optional, but recommended for local development)

## Steps Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/minchen11/E-commerce-using-Payment-Gateway.git
    ```

2. **Install dependencies:**

    ```bash
    composer install or composer update (if composer already installed)
    ```

3. **Copy the `.env.example` file to `.env` modify the environment variables**

    ```bash
    cp .env.example .env
    ```

4. **Update file `.env` file with your database credentials and other necessary configurations**

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE="YOUR DATABASE NAME"
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Tambahkan Midtrans PHP SDK Untuk menambahkan library Midtrans PHP SDK, jalankan perintah berikut:**

    ```bash
    composer require midtrans/midtrans-php
    ```

6. **Buat akun Midtrans pada laman berikut:**

    ```bash
    https://dashboard.sandbox.midtrans.com/
    ```

7. **Tambahkan kode berikut pada file `.env`:**

    ```bash
    MIDTRANS_MERCHANT_ID = "dapat id key di https://dashboard.sandbox.midtrans.com/settings/config_info "
    MIDTRANS_CLIENT_KEY= "dapat client key di https://dashboard.sandbox.midtrans.com/settings/config_info"
    MIDTRANS_SERVER_KEY="dapat server key di https://dashboard.sandbox.midtrans.com/settings/config_info"
    MIDTRANS_IS_PRODUCTION=false
    MIDTRANS_IS_SANITIZED=true
    MIDTRANS_IS_3DS=true
    ```

8. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

9. **Jalankan migrasi:**

    ```bash
    php artisan migrate
    ```

10. **Isi database (opsional):**

    ```bash
    php artisan db:seed
    ```

11. **Mulai server pengembangan:**

    ```bash
    php artisan serve
    ```

12. **Lakukan simulasi pembayaran pada laman berikut dengan cara copy image address QRIS kemudin paste pada laman berikut:**

    ```bash
    https://simulator.sandbox.midtrans.com/qris/index
    ```

Aplikasi Anda sekarang seharusnya berjalan di [http://localhost:8000](http://localhost:8000).

## Teknologi yang Digunakan

- **Laravel 8.0**: Framework PHP untuk membangun aplikasi web yang efisien.
- **MySQL**: Database relasional untuk menyimpan data aplikasi.
- **Bootstrap 4**: Framework CSS untuk desain responsif.
- **JWT (JSON Web Token)**: Sistem otentikasi untuk API.
- **Midtrans (Payment Gateway)**: Sistem payment otomatis.


# Support Me

Jika tutorial dan proyek yang saya bagikan di sini bermanfaat bagi Anda, pertimbangkan untuk mendukung saya melalui Saweria. Dukungan Anda akan membantu saya untuk terus membuat dan memperbarui konten yang berguna. Terima kasih atas dukungan Anda!

Kunjungi [Saweria](https://saweria.co/snowkel) untuk mendukung kami!
