<?php

namespace App\Models\distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
        protected $table ='products';
    protected $fillable =[
        'product_name',
        'points',
        'price',
        'distributor_id',
        'image'
        
    ];
}
