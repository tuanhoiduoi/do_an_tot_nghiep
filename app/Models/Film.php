<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory,SoftDeletes;

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
