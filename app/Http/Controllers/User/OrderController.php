<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

use DB;
use Session;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Orders;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    function place_order(Request $request) {
        $this->validate($request, [
            "first_name" => "required",
            "phone_1" => "required",
            "country" => "required",
            "state" => "required",
            "zip" => "required",
            "city" => "required",
            "address_1" => "required",
        ]);

        // cart is emty throw messages
        $carts = Session::get('cart');
        if(0 == count($carts)) {
            return back()->with('error', 'Cart is Empty');
        }

        // address
        $address = Address::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "country" => $request->country,
            "state" => $request->state,
            "zip" => $request->zip,
            "city" => $request->city,
            "address_1" => $request->address_1,
            "address_2" => $request->address_2,
            "user_id" => auth()->id(),
        ]);

        $orderCount = DB::table('orders')->count();

        $order = Orders::create([
            "code" => Helper::makeOrderCode($orderCount),
            "user_id" => auth()->id(),
            "address_id" => $address->id,
            "vendor_id" => 1,
            "total_price" => 1
        ]);

        $total = 0;
        foreach($carts as $index => $cart) {
            $product = Product::find($cart['id']);
            $total += $product->price;
            OrderDetail::insert([
                "code" => $product->code,
                "product_id" => $product->id,
                "order_id" => $order->id,
                "qty" => $cart['qty'],
                "total_price" => $cart['qty'] * $product->price
            ]);

            unset($carts[$index]);
        }

        // empty cart
        Session::put('cart', []);
        
        $order->total_price = $total;
        $order->update();

        return view('user.cart.success', ['order' => $order]);
    }
}
