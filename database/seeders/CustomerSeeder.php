<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'branch_id' => 1,
            'id_number' => '3573000000000001',
            'phone' => '628123456789',
            'email' => 'customer@example.com',
            'ig' => '@test_customer',
            'password' => bcrypt('qwerty'),
            'fcm_token' => 'sample_fcm_token_xyz',
            'mobile_token' => 'sample_mobile_token_xyz',
            'referral' => 'REF-001',
            'referrer' => 'REF-000',
            'code' => 'CUST-001',
            'name' => 'Test Customer',
            'nickname' => 'Test',
            'birthdate' => '1995-08-17',
            'sex' => 'L', // Pilihan enum: 'L' atau 'P'
            'occupation' => 'Karyawan Swasta',
            'religion' => 'Islam',
            'address' => 'Jl. Merdeka No. 123',
            'village_id' => 'VIL-01',
            'district_id' => 'DIS-01',
            'city_id' => 'CIT-01',
            'province_id' => 'PROV-01',
            'kids_count' => 0,
            'points' => 150.50,
            'level' => 'Silver',
            'image' => 'default.jpg',
            'thumb' => 'default_thumb.jpg',
            'is_active' => 1,
            'is_new' => 1,
            'total_homecare' => 0,
            'total_outlet' => 2,
            'last_order' => Carbon::now(),
            'last_login_web' => Carbon::now(),
            'last_login_mobile' => Carbon::now(),
            'last_sent_wa' => Carbon::now(),
            'last_sent_email' => Carbon::now(),
            'register_via' => 'Web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}