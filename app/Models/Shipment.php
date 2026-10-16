<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = ['shipment_name','product_id','additionalInfo','user_id', 'origin_address_id', 'destination_address_id', 'status', 'mobile', 'tracking_number', 'image' ,  'weight', 'cost'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function originAddress()
    {
        return $this->belongsTo(Address::class, 'origin_address_id');
    }

    public function destinationAddress()
    {
        return $this->belongsTo(Address::class, 'destination_address_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
    public function product()
    {
    return $this->belongsTo(Product::class);
    }
    public function trackings()
    {
    return $this->hasMany(ShipmentTracking::class);
    }
    public function getFormattedAddress($addressType = 'origin')
    {
        $address = $addressType === 'origin' ? $this->originAddress : $this->destinationAddress;

        if ($address) {
            return "{$address->city} -- {$address->state} -- {$address->street_address} -- {$address->country}";
        }

        return null;
    }

}

