<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CmsFaqSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            [
                'question' => 'Baby Spa bisa untuk usia berapa?',
                'answer' => 'Untuk pijat bayi saja bisa dari 0 bulan, jika sama dengan berenang minimal usia 3 bulan dengan BB minimal 5 kg. Jadi, untuk baby spa karena paketannya berisi pijat, gymball, scrub dan berenang bisa dimulai usia 3 bulan.',
            ],
            [
                'question' => 'Beda baby spa dengan pijat swim?',
                'answer' => 'Pijat swim berfokus pada stimulasi motorik lewat berenang dan pijat ringan, sedangkan baby spa menyertakan sesi spa lengkap termasuk gymball, scrub/pijat lulur bayi, dan berenang.',
            ],
            [
                'question' => 'Syarat bayi boleh baby swim?',
                'answer' => 'Bayi minimal berusia 3 bulan, memiliki berat badan minimal 5 kg, leher sudah tegak (bisa menopang kepala sendiri), dan dalam kondisi sehat (tidak demam).',
            ],
            [
                'question' => 'Apakah Pijat Swim mendapat treatment gymball?',
                'answer' => 'Tidak, treatment gymball biasanya hanya termasuk dalam paket lengkap Baby Spa atau sesi stimulasi tumbuh kembang khusus.',
            ],
            [
                'question' => 'Apakah demam boleh dipijat?',
                'answer' => 'Sebisa mungkin tidak dipijat saat bayi sedang demam, karena pijat dapat meningkatkan suhu tubuh. Tunggu hingga demamnya reda minimal 24 jam.',
            ]
        ];

        foreach ($faqs as $index => $item) {
            DB::table('cms_faq')->insert([
                'question' => $item['question'],
                'answer' => $item['answer'],
                'sort_order' => $index + 1,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
