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
                'rap_id' => 1,
            ],
            [
                'sophong' => 102,
                'rap_id' => 1,
            ],
            [
                'sophong' => 103,
                'rap_id' => 1,
            ],
            [
                'sophong' => 201,
                'rap_id' => 2,
            ],
            [
                'sophong' => 202,
                'rap_id' => 2,
            ],
            [
                'sophong' => 203,
                'rap_id' => 2,
            ],
            [
                'sophong' => 301,
                'rap_id' => 3,
            ],
            [
                'sophong' => 302,
                'rap_id' => 3,
            ],
            [
                'sophong' => 303,
                'rap_id' => 3,
            ],
        ]);
    }
}
