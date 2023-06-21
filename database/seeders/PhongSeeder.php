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
                'cine_id' => 1,
                'trangthai' => 1,
            ],
            [
                'sophong' => 102,
                'cine_id' => 1,
                'trangthai' => 1,
            ],
            [
                'sophong' => 103,
                'cine_id' => 1,
                'trangthai' => 1,
            ],
            [
                'sophong' => 201,
                'cine_id' => 2,
                'trangthai' => 1,
            ],
            [
                'sophong' => 202,
                'cine_id' => 2,
                'trangthai' => 1,
            ],
            [
                'sophong' => 203,
                'cine_id' => 2,
                'trangthai' => 1,
            ],
            [
                'sophong' => 301,
                'cine_id' => 3,
                'trangthai' => 1,
            ],
            [
                'sophong' => 302,
                'cine_id' => 3,
                'trangthai' => 1,
            ],
            [
                'sophong' => 303,
                'cine_id' => 3,
                'trangthai' => 1,
            ],
        ]);
    }
}
