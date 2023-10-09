<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
   
    public function index()
    {
        return view("admin.sub_category.index");
    }
   
    public function create(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return view("admin.sub_category.create", ['category' => $category]);
    }

    public function store(Request $request, $categoryId)
    {
        $this->validate($request, [
            "name" => 'required',
            // "image" => "required|file|mimes:jpeg,jpg,png,gif"
        ]);

        $fileName = '';
        if($request->image) {
            $fileName = 'storage/' . Storage::disk('public')->put('sub_categories', $request->file('image'));
        }
        
        SubCategory::create([
            'category_id' => $categoryId,
            'name' => $request->name,
            'image' => $fileName
        ]);

        return back()->with("success", "SubCategory Created Successfully !");
    }

    public function show(string $id)
    {
        $subCategories = DB::table('sub_categories')
                            ->selectRaw('id, name')
                            ->where('category_id', $id)
                            ->where('status', true)
                            ->get();

        return response($subCategories, 200);
    }

    public function edit(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $category = Category::findOrFail($subCategory->category_id);
        return view('admin.sub_category.edit', ['category' => $category, 'subCategory' => $subCategory]);
    }

    public function update(Request $request, string $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        if($request->file('image') != null) {
            unlink($subCategory->image);
            $fileName = 'storage/' . Storage::disk('public')->put('categories', $request->file('image'));
        } else {
            $fileName = $subCategory->image;
        }
        
        $subCategory->update([
            "name" => $request->name,
            "image" => $fileName
        ]);

        return redirect(route("admin.category.show", $subCategory->category_id));
    }

    public function destroy(string $id)
    {
        //
    }
}
