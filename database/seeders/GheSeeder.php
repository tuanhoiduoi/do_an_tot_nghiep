<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('chairs')->insert([
            [
                'cot' => 1,
                'dong' => 1,
                'room_id' => 1,
            ],
        ]);
    }
}
