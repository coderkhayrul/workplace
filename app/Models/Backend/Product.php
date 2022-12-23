<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'product_name',
        'product_price',
        'download_link',
        'orderby',
        'product_image',
        'product_details',
        'author_id',
    ];
    public function author()
    {
        return $this->hasOne(User::class,  'id', 'author_id');
    }
}
