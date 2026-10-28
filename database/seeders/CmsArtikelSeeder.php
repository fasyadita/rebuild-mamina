<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CmsArtikelSeeder extends Seeder
{
    public function run()
    {
        $artikels = [
            [
                'title' => 'Manfaat Baby Spa untuk Bayi: Rahasia Stimulasi Tumbuh Kembang dan Kualitas Tidur yang Lebih Optimal',
                'excerpt' => 'Baby spa membantu relaksasi dan stimulasi tumbuh kembang bayi melalui pijat lembut dan terapi air hangat. Manfaatnya meliputi ....',
                'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deleniti tempora incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis nisi ut aliquid ex ea commodi consequatur.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'category' => 'Perawatan Bayi',
                'author_name' => 'Nadira Azzahra',
                'author_photo' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'cover_image' => 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop',
                'is_featured' => 1,
            ],
            [
                'title' => 'Konsultasi Kehamilan: Langkah Awal Menjamin Tumbuh Kembang Janin yang Optimal',
                'excerpt' => 'Konsultasi kehamilan membantu memantau kesehatan ibu dan perkembangan janin sejak dini. Pemeriksaan rutin meminimalkan deteksi risiko lebih cepat sehingga kehamilan dapat dijalani dengan lebih aman dan tenang.',
                'content' => '<p>Konsultasi kehamilan membantu memantau kesehatan ibu dan perkembangan janin sejak dini. Pemeriksaan rutin meminimalkan deteksi risiko lebih cepat sehingga kehamilan dapat dijalani dengan lebih aman dan tenang.</p>',
                'category' => 'Kesehatan Ibu Hamil',
                'author_name' => 'Fasya Dita',
                'author_photo' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'cover_image' => 'https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop',
                'is_featured' => 0,
            ],
            [
                'title' => 'Perawatan Bayi yang Tepat: Panduan Dasar Menjaga Kesehatan dan Kenyamanan Si Kecil',
                'excerpt' => 'Perawatan bayi yang tepat membantu menjaga kesehatan, kebersihan, dan kenyamanan si kecil sejak hari pertama.',
                'content' => '<p>Perawatan bayi yang tepat membantu menjaga kesehatan, kebersihan, dan kenyamanan si kecil sejak hari pertama.</p>',
                'category' => 'Perawatan Bayi',
                'author_name' => 'Nadira Azzahra',
                'author_photo' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'cover_image' => 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop',
                'is_featured' => 0,
            ]
        ];

        foreach ($artikels as $item) {
            DB::table('cms_artikel')->insert([
                'title' => $item['title'],
                'excerpt' => $item['excerpt'],
                'content' => $item['content'],
                'category' => $item['category'],
                'author_name' => $item['author_name'],
                'author_photo' => $item['author_photo'],
                'cover_image' => $item['cover_image'],
                'is_featured' => $item['is_featured'],
                'is_active' => 1,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}