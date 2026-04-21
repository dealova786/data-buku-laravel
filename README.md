# CRUD Data Buku - Laravel

## Deskripsi

Aplikasi web sederhana untuk mengelola data buku menggunakan Laravel dengan fitur CRUD (Create, Read, Update, Delete).

## Fitur

- Menampilkan daftar buku
- Menambahkan buku
- Mengedit buku
- Menghapus buku

## Struktur Database

Tabel: buku

- id
- judul
- penulis
- penerbit
- tahun_terbit
- created_at
- updated_at

## Tools yang Digunakan

- Laravel sebagai framework
- PHP sebagai bahasa pemograman
- MySQL sebagai database
- XAMPP sebagai web server lokal 

## Cara Menjalankan Project

1. Clone repository terlebih dahulu
2. Masuk ke folder project: cd data-buku-laravel 
3. Jalankan `composer install`
4. Copy file `.env.example` menjadi `.env`
5. Jalankan `php artisan key:generate`
6. Atur database di file `.env`
7. Jalankan `php artisan migrate`
8. Jalankan `php artisan serve`
9. Buka browser dan akses 

## Author

Dea Lova Asmara
