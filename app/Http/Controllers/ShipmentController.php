<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\ShipmentTracking;
class ShipmentController extends Controller
{
    public function addTracking(Request $request, $shipmentId)
    {
        $validated = $request->validate([
            'status' => 'required|string',
            'location' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $shipment = Shipment::findOrFail($shipmentId);
        $tracking = new ShipmentTracking($validated);
        $shipment->trackings()->save($tracking);

        return response()->json([
            'message' => 'Tracking information added successfully.',
            'tracking' => $tracking,
        ]);
    }
    public function index()
    {
        $shipments = Shipment::all();
        return view('shipments.index', compact('shipments'));
    }
function get_create_shipment(){
    // resources/views/website/shipment/add_shipment.blade.php
    return view('website.shipment.add_shipment');
}
public function create(Request $request)
{
    // dd($request->all());

    $request->validate([
        'shipment_name' => 'required|string|max:255',
        'mobile' => 'required|string|max:20',
        'origin_address' => 'required|string|max:255',
        'destination_address' => 'required|string|max:255',
        'shipmentWeight' => 'required|numeric',
        'cost' => 'required|numeric',
        'tracking_number' => 'required|string|max:255|unique:shipments,tracking_number',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'additionalInfo' => 'nullable|string',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/img/shipments'), $imageName);
    }

    $shipment = Shipment::create([
        'user_id' => $request->user_id,
        'shipment_name' => $request->shipment_name,
        'mobile' => $request->mobile,
        'origin_address_id' => $request->origin_address,
        'destination_address_id' => $request->destination_address,
        'weight' => $request->shipmentWeight,
        'cost' => $request->cost,
        'tracking_number' => $request->tracking_number,
        'image' => $imageName ?? null,
        'additionalInfo' => $request->additionalInfo,
    ]);
     // Add the newly created shipment to the cart
     $cartController = new CartController();
     $cartController->add(new Request([
         'shipment_id' => $shipment->id,
         'quantity' => 1
     ]));
    return redirect()->route('cart.index')->with('success', 'Shipment request submitted successfully.');

}

// Retrieve a specific shipment
public function show($id)
{
    $shipment = Shipment::with(['originAddress', 'destinationAddress'])->find($id);
    if (!$shipment) {
        return response()->json(['message' => 'Shipment not found'], 404);
    }

    return response()->json(['shipment' => $shipment]);
}
public function get_edit($shipmentId)
{
    dd($shipmentId);
}
}
