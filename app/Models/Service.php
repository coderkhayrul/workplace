<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'cat_id',
        'shortDes',
        'longdes',
        'document',
        'price',
        'StartDate',
        'EndDate',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}