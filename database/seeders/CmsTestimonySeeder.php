<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CmsTestimonySeeder extends Seeder
{
    public function run()
    {
        $testimonies = [
            // Baris 1 (Scroll Left)
            [
                'reviewer_name' => 'Agnestiasanti Zuliana',
                'review_text' => 'Waktu anak kedua baru lahir langsung contact mamina buat perawatan newborn care',
                'reviewer_photo' => '/img/g1.png',
            ],
            [
                'reviewer_name' => 'Shintia Lutica',
                'review_text' => 'Saya sangat merekomendasikan baby spa di Mamina',
                'reviewer_photo' => '/img/g2.png',
            ],
            [
                'reviewer_name' => 'Galuh Mahanani',
                'review_text' => 'Sejak anak pertamaku umur 5 hari, aku sudah pakai jasa Mamina. Bidan super ramah dan telaten, bikin anak makin betah',
                'reviewer_photo' => '/img/g3.png',
            ],
            [
                'reviewer_name' => 'Hildha Dea',
                'review_text' => 'mulai dari newborn smpe skrng mau 7 bln selalu pergi ke sini, gk pernah kecewa sma pelayanannya yg sgt baik',
                'reviewer_photo' => '/img/g4.png',
            ],
            [
                'reviewer_name' => 'Ailynn',
                'review_text' => 'Highly recomended, ditangani oleh onty2 bidan yg profesional',
                'reviewer_photo' => '/img/g5.png',
            ],
            [
                'reviewer_name' => 'Eka Nurvita',
                'review_text' => 'Sangat merekomendasikan, paketnya lengkap, terapisnya profesional, Happy banget dimalang ada mamina.',
                'reviewer_photo' => '/img/g6.png',
            ],
            [
                'reviewer_name' => 'Imaa',
                'review_text' => 'Bidan yg ramah dan adminnya informatif sekali. Pokoknya kl hbs treatment disini sudah dipastikan sikecil Ibh rileks dan boboknya pules bgt',
                'reviewer_photo' => '/img/g7.png',
            ],
            [
                'reviewer_name' => 'Adilla Rosida',
                'review_text' => 'sudah 2x ke mamina memang sebagus itu layananannya, setelah pijat dari mamina tidurnya jadi pulas banget',
                'reviewer_photo' => '/img/g8.png',
            ],
            // Baris 2 (Scroll Right)
            [
                'reviewer_name' => 'Bunda Fia',
                'review_text' => 'Harga terjangkau untuk pelayanan se-premium ini. Bakal langganan terus!',
                'reviewer_photo' => '/img/mom.jpg',
            ],
            [
                'reviewer_name' => 'Ipin',
                'review_text' => 'Kali ke 2 kesini. Staffnya semua ramah. Baby jg happyyy pijatnya.. tempat nyaman & bersih, service oke & reservasi mudah',
                'reviewer_photo' => '/img/g9.png',
            ],
            [
                'reviewer_name' => 'Dea Athaya Z',
                'review_text' => 'pelayanannya baik dan ramah, tempatnya selalu bersih bikin bayi dan ibu nyaman buat menjalani treatment disini..',
                'reviewer_photo' => '/img/g10.png',
            ],
            [
                'reviewer_name' => 'Naufal Adrianto Nur',
                'review_text' => 'pelayanannya bagus banget, terapisnya juga menyenangkan, jadi anak juga nyaman waktu dipijat, pijatnya juga bagus',
                'reviewer_photo' => '/img/g11.png',
            ],
            [
                'reviewer_name' => 'Nadine Aulia',
                'review_text' => 'Tempat pijat dan spa baby and mommy yg oke banget, tempat bersih, staff ramah, cozy, overall pelayanan oke banget',
                'reviewer_photo' => '/img/g12.png',
            ],
            [
                'reviewer_name' => 'Delphine Jasmine',
                'review_text' => 'selalu langgganan, nyaman bangeet, semua treatmentny good 😍✨ Lovee mamimaaa',
                'reviewer_photo' => '/img/g13.png',
            ],
            [
                'reviewer_name' => 'Annisa Rachmawati',
                'review_text' => 'Bagus sekali pelayanan dan treatment bayi di Mamina 😇 adminnya ramah, terapisnya sabar dan telaten',
                'reviewer_photo' => '/img/g14.png',
            ],
            [
                'reviewer_name' => 'Astrid Puspita',
                'review_text' => 'Pengalaman pijat pd bengkak disini membantu sekali sangat puass, apalagi bisa homecare juga. Terimakasih mamina🫶🏻',
                'reviewer_photo' => '/img/g15.png',
            ]
        ];

        foreach ($testimonies as $index => $item) {
            DB::table('cms_testimony')->insert([
                'reviewer_name' => $item['reviewer_name'],
                'review_text' => $item['review_text'],
                'reviewer_desc' => 'Description', 
                'reviewer_photo' => $item['reviewer_photo'],
                'rating' => 5,
                'sort_order' => $index + 1,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}