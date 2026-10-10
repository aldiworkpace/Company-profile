<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $abouts = [
            [
                'judul' => 'Japan Travel',
                'visi' => 'Menjadi biro perjalanan wisata ke Jepang yang paling dipercaya di Indonesia, dengan layanan profesional, harga transparan, dan pengalaman liburan yang tak terlupakan bagi setiap pelanggan.',
                'misi' => 'Menyediakan paket perjalanan ke Jepang yang beragam dan terjangkau untuk berbagai kebutuhan wisatawan. Menghadirkan Tour Leader bersertifikat dan berpengalaman yang mendampingi perjalanan dari awal hingga akhir. Menjalin kerja sama dengan maskapai, akomodasi, dan penyedia transportasi terpercaya demi kenyamanan dan keamanan pelanggan. Memberikan pelayanan yang responsif, informasi yang jelas, dan proses pemesanan yang mudah. Memperkenalkan keindahan alam, budaya, dan kuliner Jepang melalui itinerary yang terencana dengan baik.',
                'desc_1' => 'Japan Travel hadir dengan komitmen memberikan pengalaman liburan ke Jepang yang aman, nyaman, dan berkesan. Keunggulan kami meliputi itinerary yang tersusun rapi, Tour Leader bersertifikat dan berpengalaman, akomodasi di lokasi strategis, serta harga transparan tanpa biaya tersembunyi. Tim kami juga siap membantu Anda sejak proses pemesanan, pengurusan dokumen perjalanan, hingga kepulangan, sehingga Anda bisa fokus menikmati setiap momen di Negeri Sakura.',
                'desc_2' => 'Untuk menjamin kualitas perjalanan, kami menjalin kerja sama dengan berbagai maskapai penerbangan terpercaya, jaringan hotel dan penginapan pilihan, serta penyedia transportasi darat dan kereta di Jepang. Kemitraan ini memungkinkan kami menawarkan jadwal keberangkatan yang pasti, ketersediaan seat yang terjaga, dan penawaran harga terbaik bagi setiap pelanggan. Kami juga bekerja sama dengan pemandu lokal dan penyedia tiket atraksi wisata agar perjalanan Anda berjalan lancar dari awal hingga akhir.',
                'hero_image' => '',
                'image_1' => '',
                'image_2' => '',
                'image_3' => '',
            ]

        ];
        foreach ($abouts as $about) {
            About::create($about);
        }
    }
}
