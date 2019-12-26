<?php

namespace App\Http\Controllers\Back\SubCategory;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SubCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function store(Request $request)
    {
        if ($request->values != '') {
            for ($i = 0; $i < sizeof($request->values); $i++) {
                Subcategory::create(['category_id' => $request->id, 'subcategory' => $request->values[$i]]);
            }
            Cache::forget('allCategories');
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something is wrong.');
        }
    }

    public function edit($id)
    {
        $categories = Category::select('id', 'category')->get();
        $subcategory = Subcategory::with('category')->where('id', $id)->first();

        return view('back.category.subcategoryedit', compact('categories', 'subcategory'));
    }


    public function update(Request $request, $id)
    {
        Subcategory::where('id', $id)->update(['category_id' => $request->category_id, 'subcategory' => $request->subcategory]);
        return redirect(route('categorycreate'))->with('success', 'Recored Successfully Updated.');
    }

    public function destroy($id)
    {
        Subcategory::find($id)->delete();
        return redirect()->back()->with('success', 'Record Successfully Deleted ');
    }
}
