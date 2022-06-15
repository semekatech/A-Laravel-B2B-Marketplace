<?php

namespace App\Models\retailers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteDistributor extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'category',
         'store_name',
        'region',
        'county',
        'town',
       'user_id',
       
        'distributor_id',
       
        'store_description'

    ];
}
