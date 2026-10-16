<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Address;
use App\Models\Shipment;


class HomeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function index()
    {
    return view('website.users.home');
    // my-account.html
    }
    function my_account()
    {

        $user_id =Auth()->user()->id;
        $user_data=User::find($user_id);
        $shipments = Shipment::all();
        // dd($user_id)
        $data = [
            'user_id' => $user_id,
            'user_data'=>$user_data,
            'shipments'=>$user_data->shipments,
        ];
        // dd($user_data);
        return view('website.users.my_account')->with($data);
    }
    // function my_addresses()
    // {
    //     $user_id =Auth()->user()->id;


    //     $data=[
    //         'user_id'=>$user_id,
    //         'user_addresses'=>User::find($user_id)->addresses,
    //     ];

    //     return view('website.users.addresses')->with($data);
    // }
    public function adminHome()
    {
    return view('system.pages.index');
    }
    public function managerHome()
    {
    return view('managerHome');
    }
}
