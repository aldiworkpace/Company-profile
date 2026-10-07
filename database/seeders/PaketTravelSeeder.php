<?php

namespace Database\Seeders;

use App\Models\PaketTravel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PaketTravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $paket_travels = [
            [
                'nama_paket'  => 'Tokyo Eksplore',
                'destinasi'   => 'Tokyo',
                'durasi_hari' => 4,
                'harga'       => 15000000,
                'deskripsi'   => 'Jalan-jalan di Shibuya, Senso-ji di Asakusa, Akihabara, dan Tokyo Skytree dengan berbagai jenis fasilitas lainnya tour guide terpecaya, hotel dan restoran yang aman dan nyaman.',
                'fasilitas'   => 'Hotel bintang 3, tiket pesawat PP, tour guide, sarapan harian, JR Pass lokal',
                'rating'      => 4.8,
                'image'       => 'tokyo.jpg'
            ],
            [
                'nama_paket'  => 'Kyoto Heritage',
                'destinasi'   => 'Kyoto',
                'durasi_hari' => 3,
                'harga'       => 12500000,
                'deskripsi'   => 'Kunjungi Fushimi Inari, Kinkaku-ji, dan  Bagi kamu yang ingin jalan-jalan dan mencoba menelusuri keindahan alam Jepang, cobalah untuk berkunjung ke Hutan Bambu Arashiyama. Hutan Bambu Jepang yang satu ini merupakan salah satu destinasi alam yang paling ikonik di Kyoto, Jepang.',
                'fasilitas'   => 'Hotel ryokan, tiket pesawat PP, tour guide, tiket masuk kuil, sarapan harian',
                'rating'      => 4.7,
                'image'       => 'kyoto.jpg'
            ],
            [
                'nama_paket'  => 'Osaka Street Food',
                'destinasi'   => 'Osaka',
                'durasi_hari' => 3,
                'harga'       => 11000000,
                'deskripsi'   => 'Wisata kuliner takoyaki di Dotonbori adalah tempat lahirnya popularitas takoyaki modern di Osaka, sehingga kamu bisa menemukan banyak penjual dengan variasi cita rasa masing-masing. Satu porsi biasanya berisi 6 hingga 8 bola dengan harga sekitar ¥500–¥800. Takoyaki paling nikmat disantap hangat-hangat langsung dari cetakannya, Osaka Castle, dan Universal Studios Japan.',
                'fasilitas'   => 'Hotel bintang 3, tiket pesawat PP, tiket Universal Studios, voucher kuliner',
                'rating'      => 4.6,
                'image'       => 'osaka.jpg'
            ],
            [
                'nama_paket'  => 'Hokkaido Winter Wonderland',
                'destinasi'   => 'Sapporo, Hokkaido',
                'durasi_hari' => 5,
                'harga'       => 22000000,
                'deskripsi'   => 'Bermain salju, festival es Sapporo Festival Salju Sapporo merupakan acara di musim dingin yang sangat bagus dan sangat banyak menarik jutaan orang setiap tahunnya, dan juga bisa kunjungi untuk merasakan kemeriahan festival musim dingin di Hokkaido, makanan dan minuman yang lezat, dan pemandangan citylight yang bagus, dan menikmati onsen di tengah musim dingin.',
                'fasilitas'   => 'Hotel dengan onsen, tiket pesawat PP, tour guide, sewa jaket salju, makan malam',
                'rating'      => 4.9,
                'image'       => 'hokkaido.jpg'
            ],
            [
                'nama_paket'  => 'Fuji & Hakone Escape',
                'destinasi'   => 'Gunung Fuji, Hakone',
                'durasi_hari' => 3,
                'harga'       => 13500000,
                'deskripsi'   => 'Melihat Gunung Fuji dari Danau Ashi yang dikenal sebagai spot terbaik untuk melihat pemandangan gunung fuji, naik ropeway Owakudani, dan berendam di onsen.',
                'fasilitas'   => 'Hotel onsen, tiket pesawat PP, tiket ropeway, tour guide, sarapan harian',
                'rating'      => 4.8,
                'image'       => 'fuji.jpg'
            ],
            [
                'nama_paket'  => 'Nara Deer Park Trip',
                'destinasi'   => 'Nara',
                'durasi_hari' => 2,
                'harga'       => 7500000,
                'deskripsi'   => 'Bertemu rusa jinak di Nara Park bisa memberi makan secara langsung dan memegang rusanya dan mengunjungi Todai-ji dengan Buddha raksasanya.',
                'fasilitas'   => 'Hotel bintang 3, transportasi lokal, tour guide, makanan rusa, tiket Todai-ji',
                'rating'      => 4.5,
                'image'       => 'nara.jpg'
            ],
            [
                'nama_paket'  => 'Sakura Season Special',
                'destinasi'   => 'Tokyo, Kyoto, Osaka',
                'durasi_hari' => 7,
                'harga'       => 28000000,
                'deskripsi'   => 'Nikmati mekarnya bunga sakura di tiga kota terbaik Jepang (Maret-April).',
                'fasilitas'   => 'Hotel bintang 4, tiket pesawat PP, Shinkansen, tour guide, sarapan harian, piknik hanami',
                'rating'      => 5.0,
                'image'       => 'sakura.jpg'
            ],
            [
                'nama_paket'  => 'Hiroshima & Miyajima',
                'destinasi'   => 'Hiroshima',
                'durasi_hari' => 3,
                'harga'       => 12000000,
                'deskripsi'   => 'Kunjungi Peace Memorial Park dan gerbang torii terapung di Pulau Miyajima.',
                'fasilitas'   => 'Hotel bintang 3, tiket pesawat PP, tiket feri Miyajima, tour guide, sarapan harian',
                'rating'      => 4.6,
                'image'       => 'hiroshima.jpg'
            ],
            [
                'nama_paket'  => 'Anime & Pop Culture Tour',
                'destinasi'   => 'Tokyo',
                'durasi_hari' => 4,
                'harga'       => 16500000,
                'deskripsi'   => 'Belanja merchandise di Akihabara, Nakano Broadway, dan kunjungi Ghibli Museum.',
                'fasilitas'   => 'Hotel dekat Akihabara, tiket pesawat PP, tiket Ghibli Museum, tour guide, voucher belanja',
                'rating'      => 4.7,
                'image'       => 'anime.jpg'
            ],
            [
                'nama_paket'  => 'Okinawa Beach Getaway',
                'destinasi'   => 'Okinawa',
                'durasi_hari' => 4,
                'harga'       => 14000000,
                'deskripsi'   => 'Snorkeling di laut jernih, Churaumi Aquarium, dan menikmati budaya Ryukyu.',
                'fasilitas'   => 'Resort tepi pantai, tiket pesawat PP, peralatan snorkeling, tiket aquarium, sarapan harian',
                'rating'      => 4.4,
                'image'       => 'okinawa.jpg'
            ],
        ];

        foreach ($paket_travels as $paket_travel) {
            PaketTravel::create($paket_travel);
        }
    }
}
