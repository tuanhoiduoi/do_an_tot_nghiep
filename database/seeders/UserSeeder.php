<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('users')->insert([
            [
                'hoten' => 'tuan',
                'sdt' => '0123456789',
                'password' => \Hash::make('tester1'),
                'is_admin' => 1,
            ],
            [
                'hoten' => 'tan',
                'sdt' => '1234567890',
                'password' => \Hash::make('tester2'),
                'is_admin' => 1,
            ]
        ]);
    }
}
