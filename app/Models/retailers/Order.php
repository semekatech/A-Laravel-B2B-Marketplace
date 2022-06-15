<?php

namespace App\Models\retailers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
    'order_id',
    'distributor_id',
    'retailer_id',
    'status',
     'order_id',
    ];
}
