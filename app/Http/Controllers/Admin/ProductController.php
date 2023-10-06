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
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "image" => "required|file|mimes:jpg,png,jpeg",
            "stocks" => "required",
            "price" => "required",
            "category_id" => "required",
            "sub_category_id" => "required"
        ]);

        if($request->file('image') != null) {
            $fileName = 'storage/' . Storage::disk('public')->put('products', $request->file('image'));
        } else {
            $fileName = $category->image;
        }
        // file name
        $productCount = Product::count();
        Product::create([
            "code" => Helper::makeProductCode($productCount),
            "name" => $request->name,
            "description" => $request->description,
            "image" => $fileName,
            "stocks" => $request->stocks,
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
        $categories = DB::table('categories')->selectRaw("id, name")
                        ->where('status', true)->get();
        $subCategories = DB::table('sub_categories')->selectRaw("id, name")
                        ->where('status', true)
                        ->where('category_id', $product->category_id)
                        ->get();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories, 'subCategories' => $subCategories]);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "stock" => "required",
            "price" => "required",
            "category_id" => "required",
            "sub_category_id" => "required"
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stocks = $request->stock;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;

        $product->update();

        return redirect(route("admin.product"));
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect(route("admin.product"));
    }
}
