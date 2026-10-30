<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CmsLayananSeeder extends Seeder
{
    public function run()
    {
        $layanan = [
            [
                'title' => 'Pijat Kid',
                'description' => 'Durasi ± 45 menit. Layanan meliputi pijat seluruh tubuh untuk membantu memberikan rasa rileks, nyaman, dan mengurangi rasa lelah pada anak.',
                'price' => 'Rp 121.000',
                'image' => '/img/pijat.png',
            ],
            [
                'title' => 'Pijat dan Scrub',
                'description' => 'Durasi ± 60 menit. Layanan meliputi pijat seluruh tubuh dan lulur badan untuk membantu memberikan efek relaksasi.',
                'price' => 'Rp 154.000',
                'image' => '/img/pijat1.png',
            ],
            [
                'title' => 'Pijat Bayi',
                'description' => 'Durasi 30–45 menit. Layanan meliputi baby gym dan pijat seluruh tubuh untuk membantu memberikan stimulasi dan membuat tubuh lebih rileks.',
                'price' => 'Rp 88.000',
                'image' => '/img/spa.png',
            ],
            [
                'title' => 'Pijat dan Swim',
                'description' => 'Durasi ± 60 menit. Layanan meliputi baby gym, pijat seluruh tubuh, dan berenang untuk memberikan stimulasi agar bayi merasa lebih rileks, aktif, dan nyaman.',
                'price' => 'Rp 132.000',
                'image' => '/img/pijat1.png',
            ],
            [
                'title' => 'Pijat Hamil',
                'description' => 'Layanan meliputi pijat seluruh tubuh kecuali perut dan totok wajah untuk membantu memberikan rasa rileks dan nyaman selama masa kehamilan.',
                'price' => 'Rp 165.000',
                'image' => '/img/pijat1.png',
            ],
            [
                'title' => 'Spa Hamil',
                'description' => 'Durasi ± 90 menit. Layanan meliputi pijat seluruh tubuh kecuali perut, totok wajah, lulur badan, dan sheet mask .  UK 20 mgg',
                'price' => 'Rp 220.000',
                'image' => '/img/spa.png',
            ]
        ];

        foreach ($layanan as $index => $item) {
            DB::table('cms_layanan_unggulan')->insert([
                'title' => $item['title'],
                'description' => $item['description'],
                'price' => $item['price'],
                'image' => $item['image'],
                'sort_order' => $index + 1,
                'show_on_main' => 1,
                'show_on_guest' => 1,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}