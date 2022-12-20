<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceBit extends Model
{
    use HasFactory;
    protected $fillable=([
        'service_id',
        'user_id',
        'bid-title',
        'price',
        'dateline',
        'file',
        'bidDes',
        'status',


    ]);

}
