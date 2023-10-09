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

    function search(Request $request) {
        $products = Product::where("name", 'LIKE', $request->search . '%')->paginate(15);
        
        return view('user.product.index', compact('products'));
    
    }
}
