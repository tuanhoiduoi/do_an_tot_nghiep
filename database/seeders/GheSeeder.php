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
                'tenghe' => 'A1',
                'room_id' => 1,
            ],
            [
                'cot' => 3,
                'dong' => 1,
                'tenghe' => 'A3',
                'room_id' => 1,
            ],
            [
                'cot' => 1,
                'dong' => 2,
                'tenghe' => 'B1',
                'room_id' => 1,
            ],
            [
                'cot' => 3,
                'dong' => 2,
                'tenghe' => 'B3',
                'room_id' => 1,
            ],
            [
                'cot' => 1,
                'dong' => 3,
                'tenghe' => 'C1',
                'room_id' => 1,
            ],
            [
                'cot' => 3,
                'dong' => 3,
                'tenghe' => 'C3',
                'room_id' => 1,
            ],
        ]);
    }
}
