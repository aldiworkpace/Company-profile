<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contacts = [
            [
                'email' => 'japantravel@gmail.com',
                'instagram' => 'JapanTravel_ID',
                'tiktok' => 'JapanTravel_ID',
                'telephone' => 05777554367,
                'alamat' => 'Jl. Jend. Sudirman Kav. 52-53, Senayan, Kebayoran Baru, Jakarta Selatan 12190',
                'image' => 'contac.jpg',
                'image_2' => 'contac2.jpg',
                'image_3' => 'contac3.jpg',
            ]
        ];
        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
