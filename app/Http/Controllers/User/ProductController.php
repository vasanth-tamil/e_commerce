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
        $latestProducts = Product::latest()->take(10)->get();

        return view('user.product.index', compact('products', 'latestProducts'));
    }
    
    function shop(Request $request) {
        $products = Product::paginate(15);
        $categories = DB::table('categories')->where('status', true)->get();

        return view('user.product.shop', compact('products', 'categories'));
    }

    function show(Request $request, $id) {
        $product = Product::with(['category', 'subCategory'])->findOrFail($id);
        $relatedProducts = DB::table('products')->where('category_id', $product->category_id)->take(8)->get();

        return view('user.product.show', ['product' => $product, 'relatedProducts' => $relatedProducts]);
    }

    function filter(Request $request) {
        $products = DB::table('products')
                      ->when($request->categories, function ($query) {
                            if(0 < count(request('categories')))
                                return $query->whereIn('category_id', request('categories'));
                      })
                      ->when($request->min_price, function ($query) {
                            return $query->where('price', '>=', request('min_price'));
                      })
                      ->when($request->max_price, function ($query) {
                            return $query->where('price', '<=', request('max_price'));
                      })
                      ->when($request->keyword, function ($query) {
                            return $query->where('name', 'LIKE', request('keyword') . '%');
                      })
                      ->when($request->sort_by, function ($query) {
                            // Note:: sort_by parameter only have 3
                            // low_to_high | high_to_low | latest
                            if(request('sort_by') == 'low_to_high')
                                return $query->orderBy('price');
                            if(request('sort_by') == 'high_to_low')
                                return $query->orderBy('price', 'desc');
                            if(request('sort_by') == 'latest')
                                return $query->latest();
                      })
                      ->take(15)
                      ->get();

        return response($products, 200);
    }
}
