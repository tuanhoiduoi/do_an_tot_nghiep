<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tickets')->insert([
            [
                'show_id' => 1,
                'chair_id' => 1,
                'bill_id' => null,
            ],
            [
                'show_id' => 1,
                'chair_id' => 2,
                'bill_id' => null,
            ],
            [
                'show_id' => 1,
                'chair_id' => 3,
                'bill_id' => null,
            ],
            [
                'show_id' => 1,
                'chair_id' => 4,
                'bill_id' => null,
            ],
            [
                'show_id' => 1,
                'chair_id' => 5,
                'bill_id' => null,
            ],
            [
                'show_id' => 1,
                'chair_id' => 6,
                'bill_id' => null,
            ],
        ]);
    }
}
