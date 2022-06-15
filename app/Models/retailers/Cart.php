<?php

namespace App\Models\retailers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
         protected $table ='carts';
    protected $fillable =[
        'distributor_id',
         'retailer_id',
         'points',
         'price',
         'units',
          'product',
          'total',
           'status',
            'order_id',
    ];
}
