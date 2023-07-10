<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('rooms')->insert([
            [
                'sophong' => 101,
                'dong' => 3,
                'cot' => 3,
                'cine_id' => 1,
                'trangthai' => 1,
            ],
        ]);
    }
}
