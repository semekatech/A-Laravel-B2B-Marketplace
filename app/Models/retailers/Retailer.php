<?php

namespace App\Models\retailers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;
 protected $table='retailers';
    protected $fillable=[
    'region',
    'county',
    'town',
     'mobile1',
      'mobile2',
       'store',
        'retailer_id',
         'location_description',
          'store_description',
           'image',
            'category',
    ];
}
