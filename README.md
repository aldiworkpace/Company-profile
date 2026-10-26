# Japan Travel

Website profil perusahaan (company profile) dan katalog tur perjalanan wisata ke Jepang berbasis Laravel. Project ini dibuat untuk kebutuhan praktikum dengan fitur utama berupa katalog paket perjalanan, informasi detail paket tur, profil biro perjalanan, serta informasi kontak.

## Fitur

- **Beranda**: Menampilkan highlight paket wisata pilihan dan ringkasan layanan biro perjalanan.
- **Katalog Paket Wisata**: Daftar paket perjalanan dengan paginasi, rincian harga, durasi, destinasi, rating, dan fasilitas.
- **Detail Paket Wisata**: Informasi lengkap mengenai itinerary dan deskripsi paket, fasilitas yang didapat, serta tombol konsultasi via WhatsApp.
- **Tentang Kami**: Informasi visi, misi, dan profil perusahaan.
- **Kontak**: Halaman narahubung mencakup alamat kantor, email, telepon, media sosial, dan formulir pesan.

## Tech Stack

- **Backend**: Laravel 12, PHP 8.3+
- **Frontend**: Blade, Bootstrap 5.3, Bootstrap Icons, Vite
- **Database**: MySQL

## Prasyarat

Pastikan software berikut sudah terpasang di sistem:
- PHP >= 8.3
- Composer
- Node.js & NPM
- MySQL Server (Laragon / XAMPP / Native)

## Instalasi

1. Masuk ke direktori project:
   ```bash
   cd c:/laragon/www/project-praktikum
   ```

2. Install dependensi PHP:
   ```bash
   composer install
   ```

3. Install dependensi frontend:
   ```bash
   npm install
   ```

4. Salin file environment:
   ```bash
   cp .env.example .env
   ```

5. Sesuaikan konfigurasi database pada `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=travel
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   *Pastikan database dengan nama `travel` sudah dibuat di MySQL.*

6. Generate application key:
   ```bash
   php artisan key:generate
   ```

7. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate --seed
   ```

## Menjalankan Aplikasi

Jalankan server Laravel:
```bash
php artisan serve
```

Di terminal terpisah, jalankan Vite:
```bash
npm run dev
```

Aplikasi dapat diakses melalui browser di `http://127.0.0.1:8000`.

## Struktur Database

- `paket_travels`: Data paket wisata (nama paket, destinasi, durasi hari, harga, deskripsi, fasilitas, rating, nama file gambar).
- `homes`: Data teks deskripsi dan aset visual halaman beranda.
- `abouts`: Data visi, misi, deskripsi profil, dan galeri perusahaan.
- `contacts`: Data email, telepon, akun media sosial, dan alamat kantor.

## Rute Aplikasi

| Method | URL | Nama Rute | Controller Action |
|---|---|---|---|
| GET | `/` | home | HomeController@index |
| GET | `/travel` | travel.index | PaketTravelController@index |
| GET | `/travel/{id}` | travel.show | PaketTravelController@show |
| GET | `/about` | about.index | AboutController@index |
| GET | `/contact` | contact.index | ContactController@index |

## Struktur Folder Utama

```text
app/
  ├── Http/Controllers/   # HomeController, PaketTravelController, AboutController, ContactController
  └── Models/             # PaketTravel, Home, About, Contact
database/
  ├── migrations/         # Skema tabel database
  └── seeders/            # Seeder data awal
public/
  └── images/             # Asset gambar paket tur dan halaman
resources/
  ├── css/                # Styling (Bootstrap & app.css)
  ├── js/                 # Inisialisasi JavaScript
  └── views/
      ├── layouts/        # Layout utama (app.blade.php)
      ├── partials/       # Komponen navbar, footer, dan sections
      └── page/           # View halaman (home, travel, paket-detail, about, contact)
routes/
  └── web.php             # Routing aplikasi web
```

## Pengembang

- Aldi Rizki Bagus Anggoro ([GitHub](https://github.com/aldiworkpace))

## Lisensi

Proyek ini dilisensikan di bawah MIT License.
