<?php

namespace App\Http\Controllers\Back\Category;

use App\Category;
use App\Childcategory;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomClasses\ManageImage;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $categories = Category::with('subcategory')->get();
        $subcategories = Subcategory::with('childcategory')->get();
        $childcategories = Childcategory::all();
        return view('back.category.create', compact('categories', 'subcategories', 'childcategories'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            Category::insert(['category' => $request->category, 'photo' => ManageImage::insertImage('public/image/category-images', $request->photo)]);
        } else {
            Category::insert(['category' => $request->category, 'photo' => null]);
        }

        Cache::forget('allCategories');
        return redirect()->back()->with('success', 'Category Added.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('back.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            $data = Category::select('photo')->where('id', $id)->first();
            ManageImage::deleteImage($data->photo);
            Category::where('id', $id)->update(['category' => $request->category, 'photo' => ManageImage::insertImage('public/image/category-images', $request->photo)]);
        }
        Cache::forget('allCategories');
        Category::where('id', $id)->update(['category' => $request->category]);
        return redirect(route('categorycreate'))->with('success', 'Recored Successfully Updated.');
    }

    public function destroy($id)
    {
        $data = Category::select('photo')->where('id', $id)->first();
        ManageImage::deleteImage('public/image/category-images/' . $data->photo);
        Category::find($id)->delete();
        Cache::forget('allCategories');
        return redirect()->back()->with('success', 'Record Successfully Deleted ');
    }
}
