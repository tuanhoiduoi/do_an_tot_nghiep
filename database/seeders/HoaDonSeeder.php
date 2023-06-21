<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('bills')->insert([
            [
                'kh_id' => 2,
                'ngaylap' => '2023-07-19',
                'veri' => 'KHJUITGH',
            ]
        ]);
    }
}
