<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showtime extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'film_id',
        'room_id',
        'thoigian',
        'trangthai',
        'tien',
    ];
}
