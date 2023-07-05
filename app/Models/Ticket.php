<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'show_id',
        'bill_id',
        'chair_id',
    ];
    public function ghe()
    {
        return $this-> belongsTo(Chair::class);
    }
}
