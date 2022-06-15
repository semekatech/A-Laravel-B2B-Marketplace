<?php

namespace App\Models\distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FevoriteRetailer extends Model
{
    use HasFactory;
     protected $fallable=[
         'store',
         'category',
         'region',
         'county',
         'town',
         'location_description',
         'user_id',
         'retailer_id'

     ];
}
