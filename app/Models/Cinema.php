<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cinema extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'tenrap',
        'diachi',
        'trangthai',
    ];
    public function rooms(){
        return $this->hasMany(Room::class,'cine_id');
    }
}
