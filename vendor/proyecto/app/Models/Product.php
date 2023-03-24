<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'details',
        'price',
        'shipping_cost',
        'description',
        'category_id',
        'brand_id',
        'imageg_path',
    ];
}
