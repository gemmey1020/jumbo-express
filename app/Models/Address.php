<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'country', 'state', 'city', 'street_address', 'zip_code', 'additional_info'];

    public function shipmentsOrigin()
    {
        return $this->hasMany(Shipment::class, 'origin_address_id');
    }

    public function shipmentsDestination()
    {
        return $this->hasMany(Shipment::class, 'destination_address_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getFormattedAddress()
    {
        return "{$this->city} -- {$this->state} -- {$this->street_address} -- {$this->country}";
    }
}
