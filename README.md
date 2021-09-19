# README (Tes Kemampuan Teknis Programmer Web)

## Yang dinilai dari tes ini:

- Kemampuan untuk memahami instruksi
- Kemampuan laravel
- Kemampuan memahami relasi database
- Kemampuan git
- Kemampuan logika

## Yang tidak dinilai dari tes ini:

- Keindahan UI / tampilan

## Spesifikasi

- Laravel 8
- PHP 7.2
- MySQL 5.1

## Aturan

- Dibuat menggunakan laravel versi 8
- Aplikasi harus berjalan tanpa error
- Buat di branch dengan nama: `nama-peserta`
- Buat file readme.md di dalam folder docs berisikan apa yang berhasil dikerjakan dan apa yang tidak berhasil beserta alasannya
- Harus sudah di push paling lambat jam 17:00 WIB
- Penulisan kode program harus mengikuti laravel best practice (lihat tautan di bagian resource)

## Resource:

- [Laravel](https://laravel.com/)
- [Laravel Best Practice](https://github.com/alexeymezenin/laravel-best-practices/blob/master/README.md)

## Tugas

### Fungsi Autentikasi

Deskripsi: Halaman login
- Url: /login
- Konten: Login form

Deskripsi: Halaman terbatas (perlu login), Hanya user yang berhasil login yang boleh masuk halaman ini
- Url: /authorize-only
- Konten: Halo [user]

Data seeder:
users

email | password
---|---
admin@admin.test | test

### CRUD dan Unit Testing

Deskripsi: Buat sebuah tabel dengan nama `tanggung-jawab` berisi id, slug, dan nama. Kemudian buatlah fungsi crud untuk mengedit tabel tersebut, beserta unit testingnya.

- Url: /tanggung-jawab
- Konten: list isi tabel beserta akses ke fungsi edit view dan delete

### Relasi Database

Deskripsi:

Buat database migration dan model untuk kasus berikut:
User bisa posting berita, setiap berita hanya bisa di edit oleh user yg memposting, atau yang memiliki tanggung jawab sebagai editor, setiap user bisa memiliki satu atau lebih tanggung jawab, tabel tanggung jawab menggunakan tabel pada tes CRUD diatas. 

Data Seeder:
tanggung-jawab

slug | name
---|---
admin | Administrator
editor | Editorial
member | Member
guest | Guest

### Logic

Buat 2 form input text, yang bila diisi akan menghasilkan
1. input1 text tersebut setelah dibalik (misal: `kasur: rusak`, `kipas: sapik`
2. apakah input1 text yang diinput itu merupakan palindrom / nilai setelah dibalik tidak berubah dari nilai awalnya (misal: `apa`, `kasur Nababan rusak`
3. Jumlah huruf vokal dalam input1 text tersebut (misal: `spesial: 3`m `zebra: 2`)
4. Jumlah huruf mati / non vokal dalam input1 text tersebut
5. tes apakah input2 text merupakan anagram dari input1 text tersebut (misal: `input1: The Eyes`, `input2: They See` maka itu merupakan sebuah anagram. contoh lain `listen` merupakan anagram dari `silent`)

- url: /logic
- konten: 2 buah form input text dan 1 tombol submit

