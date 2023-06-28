<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'sophong',
        'rap_id',
        'dong',
        'cot',
        'cine_id',
        'trangthai',
    ];
}
