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
        'price',
        'dateline',
        'file',
        'bidDes',
        'status',
    ]);
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
