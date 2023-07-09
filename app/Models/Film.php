<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'hinh',
        'tenphim',
        'noidung',
        'thoiluong',
        'daodien',
        'trailer',
        'trangthai',
    ];
    protected $primarykey = 'id';
    protected $table = 'films';
}
