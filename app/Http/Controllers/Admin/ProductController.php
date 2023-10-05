<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Helper;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::query()
                            ->with(['category' => function ($query) {
                                $query->select('id', 'name');
                            }])
                            ->paginate(10);
        return view("admin.product.index", compact('products'));
    }

    public function create()
    {
        $categories = DB::table('categories')->selectRaw("id, name")
                        ->where('status', true)->get();
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // file name
        $fileName = 'storage/' . Storage::disk('public')->put('products', $request->file('image'));
        $productCount = Product::count();
        Product::create([
            "code" => Helper::makeProductCode($productCount),
            "name" => $request->name,
            "description" => $request->description,
            "image" => $fileName,
            "stocks" => $request->stock,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "sub_category_id" => $request->sub_category_id
        ]);
        return back()->with('success', 'Product Created Successfully !');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view("admin.product.show", ['product' => $product]);
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
