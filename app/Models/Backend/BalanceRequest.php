<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance_id',
        'user_id',
        'amount',
        'method',
        'number',
        'traID',
        'status',
        'approve_id',
    ];

    protected $primaryKey = 'balance_id';
}
