<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('cinemas')->insert([
            [
                'tenrap' => 'Hùng Vương Plaza',
                'diachi' => 'Tầng 7 | Hùng Vương Plaza, 126 Hồng Bàng, Phường 12, Quận 5, TP. Hồ Chí Minh',
                'trangthai' => 1,
            ],
            [
                'tenrap' => 'Vincom Center Landmark 81',
                'diachi' => 'Tầng B1 , TTTM Vincom Center Landmark 81, 772 Điện Biên Phủ, P.22, Q. Bình Thạnh, HCM',
                'trangthai' => 1,
            ],
            [
                'tenrap' => 'Pearl Plaza',
                'diachi' => 'Tầng 5, Pearl Plaza, 561A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM',
                'trangthai' => 1,
            ],
        ]);
    }
}
