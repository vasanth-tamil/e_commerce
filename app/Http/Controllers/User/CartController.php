<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;

class CartController extends Controller
{
    function index() {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        return view("user.cart.index", ['carts' => $carts]);
    }

    function add_cart (Request $request) {
        $this->validate($request, [
            "product_id" => "required"
        ]);

        if(Cart::where('product_id', $request->product_id)->exists())
            return response([], 403);

        Cart::insert([
            "user_id" => auth()->id(),
            "product_id" => $request->product_id,
            "qty" => 1
        ]);

        return response([], 200);
    }
}
