<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CmsCabangSeeder extends Seeder
{
    public function run()
    {
        $cabangs = [
            [
                'nama_cabang' => 'Mamina Cabang Malang',
                'alamat' => 'Ruko Wow, Samping Guardian dan Superindo, Jl. Raya Sawojajar SH-1 No.3, Kota Malang, Jawa Timur 65139',
                'jam_operasional' => 'Senin - Minggu | 08.00–19.00',
                'no_telepon' => '081329913203',
                'gmaps_link' => 'https://maps.app.goo.gl/iSNL7YwZUPkyaVB1A',
                'image' => '/img/cabang-mlg.jpg',
            ],
            [
                'nama_cabang' => 'Mamina Cabang Malang', // Mengikuti data dari HTML untuk cabang Suhat
                'alamat' => '1-2, Jl. Sukarno Hatta Indah, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
                'jam_operasional' => 'Senin - Minggu | 08.00–19.00',
                'no_telepon' => '081329913203',
                'gmaps_link' => 'https://maps.app.goo.gl/sT3BM3YnzyeJ1zF28',
                'image' => '/img/cabang-sht.jpeg',
            ],
            [
                'nama_cabang' => 'Mamina Cabang Kediri',
                'alamat' => 'Jl. Sahardjo No.88B, Campurejo, Kec. Mojoroto, Kota Kediri, Jawa Timur 64116',
                'jam_operasional' => 'Senin - Minggu | 08.00–19.00',
                'no_telepon' => '082131090283',
                'gmaps_link' => 'https://maps.app.goo.gl/6eFVGZbbF68wu9Q87',
                'image' => '/img/cabang-kdr.jpeg',
            ]
        ];

        foreach ($cabangs as $index => $item) {
            DB::table('cms_cabang')->insert([
                'nama_cabang' => $item['nama_cabang'],
                'alamat' => $item['alamat'],
                'jam_operasional' => $item['jam_operasional'],
                'no_telepon' => $item['no_telepon'],
                'gmaps_link' => $item['gmaps_link'],
                'image' => $item['image'],
                'sort_order' => $index + 1,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}