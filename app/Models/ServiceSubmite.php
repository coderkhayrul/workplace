<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\User;
use App\Models\PlaceBit;

class ServiceSubmite extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function PlaceBit(){
        return $this->belongsTo(PlaceBit::class, 'bid_id');
    }
}
