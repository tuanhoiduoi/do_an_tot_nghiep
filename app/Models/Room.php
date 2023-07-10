<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'sophong',
        'dong',
        'cot',
        'cine_id',
        'trangthai',
    ];
    public function cinemas(){
        return $this->beLongsTo(Cinema::class, 'cine_id', 'cinemas');
    }
}
