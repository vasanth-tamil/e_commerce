<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

use App\Models\Product;
use App\Models\Orders;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    function place_order(Request $request) {

        // "code",
        // "product_id",
        // "status",
        // "qty",
        // "total_price"
        $orderCount = Orders::count();
        $orderId = Orders::create([
            "code" => Helper::makeOrderCode($orderCount),
            "user_id" => auth()->id(),
            "address_id" => 1,
            "vendor_id" => 1,
            "total_price" => 200
        ])->id;

        dd($orderId);

        foreach($request->cart as $cart) {
            $product = Product::find($cart['id'])->first();

            OrderDetail::insert([
                "code" => $product->code,
                "product_id" => $product->id,
                "order_id" => $orderId,
                "status" => $product->status,
                "qty" => $cart['qty'],
                "total_price" => $cart['qty'] * $product->price
            ]);
        }
        return view();
    }
}
