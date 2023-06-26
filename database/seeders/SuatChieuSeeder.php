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
                'film_id' => '1',
                'room_id' => '1',
                'thoigian' => '2023-07-19 10:00:00',
                'trangthai' => 1,
            ],
            [
                'film_id' => '1',
                'room_id' => '1',
                'thoigian' => '2023-07-19 13:00:00',
                'trangthai' => 1,
            ],
            [
                'film_id' => '2',
                'room_id' => '1',
                'thoigian' => '2023-07-19 11:00:00',
                'trangthai' => 1,
            ],
            [
                'film_id' => '2',
                'room_id' => '1',
                'thoigian' => '2023-07-19 14:00:00',
                'trangthai' => 1,
            ],
        ]);
    }
}
