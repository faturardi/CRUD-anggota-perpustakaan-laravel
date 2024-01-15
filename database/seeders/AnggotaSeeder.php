<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
