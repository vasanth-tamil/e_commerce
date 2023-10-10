<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    function index() {
        $products = Product::take(15)->get();
        $latestProducts = Product::latest()->take(10)->get();
        
        return view('user.product.index', ['products' => $products, 'latestProducts' => $latestProducts]);
    }
    
    function search(Request $request) {
        $products = Product::where("name", 'LIKE', $request->search . '%')->paginate(15);
        
        return view('user.product.index', compact('products'));
    }
    
    function shop(Request $request) {
        $products = Product::paginate(9);
        $categories = DB::table('categories')->where('status', true)->get();

        return view('user.product.shop', compact('products', 'categories'));
    }
}
