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
                'sophong' => 1,
                'rap_id' => 1,
            ],
            [
                'sophong' => 2,
                'rap_id' => 1,
            ],
            [
                'sophong' => 3,
                'rap_id' => 1,
            ],
            [
                'sophong' => 1,
                'rap_id' => 2,
            ],
            [
                'sophong' => 2,
                'rap_id' => 2,
            ],
            [
                'sophong' => 3,
                'rap_id' => 2,
            ],
            [
                'sophong' => 1,
                'rap_id' => 3,
            ],
            [
                'sophong' => 2,
                'rap_id' => 3,
            ],
            [
                'sophong' => 3,
                'rap_id' => 3,
            ],
        ]);
    }
}
