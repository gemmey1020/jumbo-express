<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\User;

class AddressController extends Controller
{

    public function addAddress(Request $request)
    {
        // dd($request->all());
        // $validated = $request->validate([
        //     'user_id' => 'required|exists:users,id',
        //     'country' => 'required|string',
        //     'state' => 'nullable|string',
        //     'city' => 'required|string',
        //     'street_address' => 'required|string',
        //     'zip_code' => 'required|string',
        //     'additional_info' => 'nullable|string'
        // ]);

        $address = new Address;
        $address->user_id = $request->user_id ;
        $address->country = $request->country ;
        $address->city = $request->city ;
        $address->street_address = $request->street_address ;
        $address->zip_code = $request->postal_code ;
        $address->additional_info = $request->additional_info ;

        if($address->save())
        {
            if($request->has('main_address'))
            {
                $user_data =Auth()->user();
                $user_data->main_address = $address->id ;
                $user_data->save();
            }
        }

        // dd($address);
        return back()->withresponse(['message' => 'Address added successfully', 'address' => $address]);
    }
    public function my_addresses() {
        // dd(auth()->user()->id);
            $user_id =Auth()->user()->id;
            $main_address = new User;
            $data=[
                'user_id'=>$user_id,
                'main_address'=>$main_address->main_address($user_id) ?? null,
                'user_addresses'=>User::find($user_id)->addresses ?? null,
            ];
            // dd($data);
            return view('website.users.addresses')->with($data);
    }
    // Edit an existing address
    function get_edit_address($lang, $address_id) {
        $addrerss_data = Address::find($address_id);

        // dd($addrerss_data);
        // dd($lang , $addrerss_data , $address_id);
        $data=[
            'address_id'=>$address_id,
            'address_data'=>$addrerss_data,
        ];
// dd($data);
        $return_modal_HTML = view('website.partials.account_panel.edit_address_modal')->with($data)->render();
return response()->json(array('success' => true, 'html'=>$return_modal_HTML));
        // return view();
    }
    public function editAddress(Request $request)
    {
        // dd($request->all());
        $address = Address::find($request->address_id);
        if (!$address) {
            return back()->withresponse(['message' => 'Address not found'], 404);
        }

        // $validated = $request->validate([
        //     'country' => 'required|string',
        //     'state' => 'required|string',
        //     'city' => 'required|string',
        //     'street_address' => 'required|string',
        //     'zip_code' => 'required|string',
        //     'additional_info' => 'nullable|string'
        // ]);


        $address->user_id = $request->user_id ;
        $address->country = $request->country ;
        $address->city = $request->city ;
        $address->street_address = $request->street_address ;
        $address->zip_code = $request->postal_code ;
        $address->additional_info = $request->additional_info ;

        if($address->save())
        {
            if($request->has('main_address'))
            {
                $user_data =Auth()->user();
                $user_data->main_address = $address->id ;
                $user_data->save();
            }
        }
        return back()->withresponse(['message' => 'Address updated successfully', 'address' => $address]);
    }

    // Delete an existing address
    public function deleteAddress($locale , $id)
    {

        $address = Address::find($id);
        if (!$address) {
            return back()->withresponse(['message' => 'Address not found'], 404);
        }

        $address->delete();
        return back()->withresponse(['message' => 'Address deleted successfully']);
    }

}
