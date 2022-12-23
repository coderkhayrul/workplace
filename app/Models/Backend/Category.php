<?php

namespace App\Models\Backend;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'categories';

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function service()
    {
        return $this->hasMany(Service::class, 'cat_id', 'id');
    }
}
