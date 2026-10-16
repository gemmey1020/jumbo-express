<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShipmentTracking;


class TrackingController extends Controller
{
     // Retrieve tracking information for a shipment
     public function track($id)
     {
         $tracking = ShipmentTracking::where('shipment_id', $id)->get();

         if ($tracking->isEmpty()) {
             return response()->json(['message' => 'No tracking information available'], 404);
         }

         return response()->json(['tracking_info' => $tracking]);
     }
}
