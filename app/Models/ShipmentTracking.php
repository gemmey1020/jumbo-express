<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentTracking extends Model
{
    use HasFactory;
    protected $fillable = ['shipment_id', 'status', 'location', 'description'];

    public function shipment()
    {
        // i will check it and come back to u soon
        return $this->belongsTo(Shipment::class);
    }
}
