<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuatChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('showtimes')->insert([
            [
                'phim_id' => '1',
                'phong_id' => '2',
                'thoigian' => '2023-07-19 10:00:00',
            ],
            [
                'phim_id' => '1',
                'phong_id' => '2',
                'thoigian' => '2023-07-19 13:00:00',
            ],
            [
                'phim_id' => '2',
                'phong_id' => '3',
                'thoigian' => '2023-07-19 11:00:00',
            ],
            [
                'phim_id' => '2',
                'phong_id' => '3',
                'thoigian' => '2023-07-19 14:00:00',
            ],
        ]);
    }
}
