<?php

namespace App\Models\retailers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteDistributor extends Model
{
    use HasFactory;
     protected $table ='favourite_distributors';
    protected $fillable =[
        'distributor_id',
         'user_id',
    ];
}
