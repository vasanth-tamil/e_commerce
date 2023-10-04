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
        $catgories = Category::paginate(10); 
        return view('admin.category.index', ['categories' => $catgories]);
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "image" => "required|file|mimes:jpeg,jpg,png,gif"
        ]);

        // file name
        $fileName = 'storage/' . Storage::disk('public')->put('categories', $request->file('image'));
        $category = Category::create([
            "name" => $request->name,
            "image" => $fileName
        ]);
        $category->image = asset($fileName);


        return back()->with("success", "Category Created Successfully !");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
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
