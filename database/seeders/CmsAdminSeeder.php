<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\CmsAdmin;

class CmsAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsAdmin::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Administrator Mamina',
                'email' => 'admin@mamina.id',
                'password' => Hash::make('admin123'),
            ]
        );
        
    }
}
