<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Shipment;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('items.shipment')->where('user_id', auth()->id())->first();
        // dd($cart);
        return view('website.users.cart', compact('cart'));
    }
    function cart_checkout()  {

        $cart = Cart::with('items.shipment')->where('user_id', auth()->id())->first();
        $user = auth()->user();
        $addresses = $user->addresses;
        return view('website.users.checkout_2' , compact('cart','addresses'));
    }
    function cart_invoice() {
        return view('website.users.checkout_3' );
    }

    public function add(Request $request)
    {
        // $request->validate([
        //     'shipment_id' => 'required|exists:shipments,id',
        //     'quantity' => 'required|integer|min=1'
        // ]);

        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('shipment_id', $request->shipment_id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'shipment_id' => $request->shipment_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Shipment added to cart.');
    }

    public function remove($lang , $id)
    {

        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Shipment removed from cart.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min=1'
        ]);

        $cartItem = CartItem::findOrFail($id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }
}
