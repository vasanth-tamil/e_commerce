<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Cart;
use App\Models\Product;
use DB;
use Session;

class CartController extends Controller
{
    function index() {
        return view("user.cart.index");
    }

    function view_cart() {
        return view('user.cart.view-cart');
    }
    
    function add_cart (Request $request) {
        $this->validate($request, [
            "product_id" => "required"
        ]);

        $carts = Session::get('cart') ?? [];

        foreach($carts as $cart) {
            if($cart['id'] == $request->product_id)
                return response([], 403);
        }

        // get product information
        $product = DB::table('products')->where('id', $request->product_id)->first();
        
        $carts[] = [
            "id" => $product->id,
            "code" => $product->code,
            "name" => $product->name,
            "image" => $product->image,
            "price" => $product->price,
            "qty" => 1
        ];
        Session::put('cart', $carts);

        return response(['cart' => $carts], 200); 
    }
    
    function remove_cart (Request $request) {
        $this->validate($request, [
            "product_id" => "required"
        ]);

        $carts = Session::get('cart') ?? [];

        foreach($carts as $index => $cart) {
            if($cart['id'] == $request->product_id)
                unset($carts[$index]);
        }

        Session::put('cart', $carts);
        
        return response([], 200);
    }
    
    function update_cart (Request $request) {
        $carts = Session::get('cart') ?? [];
        
        foreach($request->updateCart as $index => $ucart) {
            
            foreach($carts as $index => $cart) {
                if($cart['id'] == $ucart['product_id']) {
                    $carts[$index]['qty'] = $ucart['qty']; 
                }
            }
        }
        
        Session::put('cart', $carts);
        
        return back()->with('success', 'Updated Cart !'); 
    }

    function checkout_page() {
        return view('user.cart.checkout');
    }

    function checkout() {
        return ;
    }
}
