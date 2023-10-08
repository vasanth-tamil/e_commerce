<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    function index() {
        $products = Product::paginate(15);
        $cart = Cart::with('product')->where('user_id', auth()->id())->get();
        
        return view('user.product.index', compact('products', 'cart'));
    }

    function filter(Request $request) {
        return;
    }
}
