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
                'nama_paket' => 'Tokyo Eksplore',
                'destinasi' => 'Tokyo',
                'durasi_hari' => 4,
                'harga' => 35000000,
                'deskripsi' => 'Liburan asyik di pantai Kuta dan Ubud.',
                'image' => 'tokyo.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],
            [
                'nama_paket' => 'Kyoto Heritage',
                'destinasi' => 'Kyoto',
                'durasi_hari' => 3,
                'harga' => 25000000,
                'deskripsi' => 'Mengunjungi kuil bersejarah dan menikmati suasana tenang Kyoto.',
                'image' => 'kyoto.jpg'
            ],

        ];

        foreach ($paket_travels as $paket_travel) {
            PaketTravel::create($paket_travel);
        }
    }
}
