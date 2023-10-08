<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

use DB;
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
            "last_name" => "required",
            "phone_1" => "required",
            "country" => "required",
            "state" => "required",
            "zip" => "required",
            "city" => "required",
            "address_1" => "required",
        ]);

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
            "total_price" => 200
        ]);

        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        $total = 0;
        foreach($carts as $cart) {
            $total += $cart->product->price;
            OrderDetail::insert([
                "code" => $cart->product->code,
                "product_id" => $cart->product->id,
                "order_id" => $order->id,
                "qty" => $cart->qty,
                "total_price" => $cart->qty * $cart->product->price
            ]);

            $cart->delete();
        }
        
        $order->total_price = $total;
        $order->update();
        return redirect(route('user.product'));
    }
}
