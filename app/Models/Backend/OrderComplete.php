<?php

namespace App\Models\Backend;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderComplete extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'service_id',
        'bid_id',
        'buyer_id',
        'seller_id',
        'duration',
        'price',
        'status',
    ];

    public function service(){
        return $this->belongsTo(Service::class,'id');
    }
    public function bid(){
        return $this->belongsTo(PlaceBit::class,'id');
    }
}
