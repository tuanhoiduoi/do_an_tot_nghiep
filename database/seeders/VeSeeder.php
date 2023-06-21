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
                'bill_id' => 1,
            ],
            [
                'show_id' => 2,
                'bill_id' =>null,
                'chair_id' => 1,
            ],
        ]);
    }
}
