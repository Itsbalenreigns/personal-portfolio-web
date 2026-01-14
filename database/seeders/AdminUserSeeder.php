<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'ROMAM Balen',
            'email' => 'balenromam97@gmail.com',
            'password' => bcrypt('B@len$2000'),
            'is_admin' => true,
        ]);
    }
}
