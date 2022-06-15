<?php

namespace App\Models\distributor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorProfile extends Model
{
    use HasFactory;
    protected $table='distributor_profiles';
    protected $fillable=[
        'store_name',
        'category',
        'region',
        'county',
        'town',
        'location_description',
        'deliverystatus',
        'working_days',
        'distributor_id',
        'image',
        'contact1',
        'contact2',
        'store_description'

    ];
    public function setWorkingdaysAttribute($value)
    {
        $this->attributes['working_days'] = json_encode($value);
    }

    public function getWorkingdaysAttribute($value)
    {
        return $this->attributes['working_days'] = json_decode($value);
    }
}
