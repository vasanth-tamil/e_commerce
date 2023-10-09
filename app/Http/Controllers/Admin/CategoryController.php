<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->select(['id', 'name', 'created_at', 'status'])->paginate(10); 
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            // "image" => "required|file|mimes:jpeg,jpg,png,gif"
        ]);

        // file name
        $fileName = '';
        if($request->image) {
            $fileName = 'storage/' . Storage::disk('public')->put('categories', $request->file('image'));
        }
        $category = Category::create([
            "name" => $request->name,
            "image" => $fileName
        ]);
        $category->image = asset($fileName);

        return back()->with("success", "Category Created Successfully !");
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        $subCategories = $category->subCategories()->paginate(10);
        return view('admin.category.show', compact('category', 'subCategories'));
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view("admin.category.edit", ['category' => $category]);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        if($request->file('image') != null) {
            $fileName = 'storage/' .Storage::disk('public')->put('categories', $request->file('image'));
        } else {
            $fileName = $category->image;
        }
        
        $category->update([
            "name" => $request->name,
            "image" =>  $fileName
        ]);

        return redirect(route("admin.category"));
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return back();
    }
}
