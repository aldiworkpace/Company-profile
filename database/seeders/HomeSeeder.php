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
                'deskripsi_1' => 'Wujudkan liburan impian Anda ke Jepang 2026-2027: Halal & Traveling Jepang bersama Japan Travel! Kami menghadirkan koleksi eksklusif Paket Tour Jepang 2026-2027: Trip | Japan Travel 2026-2027 dengan itinerary yang dirancang khusus untuk memastikan pengalaman wisata yang maksimal. Nikmati perjalanan tak terlupakan mengunjungi ikon budaya, landmark populer, hingga destinasi alam menakjubkan di setiap musim favorit Anda dengan fasilitas pelayanan bintang lima, memberikan kenangan baru dalam hidup anda.',
                'deskripsi_2' => 'Tersedia beragam opsi perjalanan yang dipandu oleh Tour Leader bersertifikat dan berpengalaman. Silakan temukan ketersediaan seat terkini, jadwal keberangkatan pasti,serta pilihan maskapai penerbangan premium dengan penawaran harga terbaik pada katalog paket travel kami.',
                'deskripsi_3' => 'Ribuan traveler telah mempercayakan perjalanan mereka kepada kami. Dengan layanan responsif, proses pemesanan mudah, dan jaminan keamanan perjalanan, kami siap mewujudkan liburan impian Anda ke Negeri Sakura.',
                'cta_judul_1' => 'Akomodasi Nyaman & Strategis',
                'cta_judul_2' => 'Transportasi & Penerbangan Premium',
                'cta_judul_3' => 'Tour Leader Berpengalaman',
                'cta_desc1' => 'Kami menyiapkan penginapan pilihan di lokasi strategis, dekat dengan stasiun, pusat wisata, dan area kuliner. Setiap hotel dipilih dengan standar kebersihan, kenyamanan, dan keamanan yang baik.',
                'cta_desc2' => 'Perjalanan Anda didukung maskapai penerbangan premium dengan jadwal yang jelas, serta transportasi darat yang nyaman selama di Jepang, mulai dari bus wisata hingga kereta cepat. Semua sudah diatur dengan rapi dan mudah',
                'cta_desc3' => 'Setiap rombongan didampingi Tour Leader bersertifikat dan berpengalaman yang siap membantu dari keberangkatan hingga kepulangan. Mulai dari memandu itinerary, menjelaskan budaya setempat, hingga membantu kebutuhan Anda selama perjalanan.',
                'hero_image' => 'home.jpg',
                'image_1' => 'home1.jpg',
                'image_2' => 'home2.jpg',
                'image_3' => 'cta.jpg',
                'image_4' => 'cta2.jpg',
                'image_5' => 'cta3.jpg',
            ]
        ];
        foreach ($homes as $home) {
            Home::create($home);
        }
    }
}
