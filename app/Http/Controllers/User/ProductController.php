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
        
        return view('user.product.index', compact('products'));
    }

    function filter(Request $request) {
        return;
    }
}
