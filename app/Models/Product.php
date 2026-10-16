<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['user_id', 'name', 'category', 'description', 'quantity', 'weight'];


    // If you're linking products directly to shipments
    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
