<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $homes = [
            [
                'judul' => 'Berkenalan dengan kami',
                'deskripsi_1' => 'Wujudkan liburan impian Anda ke Jepang 2026-2027: Halal & Traveling Jepang bersama Japan Travel! Kami menghadirkan koleksi eksklusif Paket Tour Jepang 2026-2027: Trip | Japan Travel 2026-2027 dengan itinerary yang dirancang khusus untuk memastikan pengalaman wisata yang maksimal. Nikmati perjalanan tak terlupakan mengunjungi ikon budaya, landmark populer, hingga destinasi alam menakjubkan di setiap musim favorit Anda dengan fasilitas pelayanan bintang lima, memberikan kenangan baru dalam hidup anda.',
                'deskripsi_2' => 'Tersedia beragam opsi perjalanan yang dipandu oleh Tour Leader bersertifikat dan berpengalaman. Silakan temukan ketersediaan seat terkini, jadwal keberangkatan pasti,serta pilihan maskapai penerbangan premium dengan penawaran harga terbaik pada katalog paket travel kami.',
                'deskripsi_3' => 'Ribuan traveler telah mempercayakan perjalanan mereka kepada kami. Dengan layanan responsif, proses pemesanan mudah, dan jaminan keamanan perjalanan, kami siap mewujudkan liburan impian Anda ke Negeri Sakura.',
                'image_1' => 'home.jpg',
                'image_2' => 'home.2jpg',
            ]
        ];
        foreach ($homes as $home) {
            Home::create($home);
        }
    }
}
