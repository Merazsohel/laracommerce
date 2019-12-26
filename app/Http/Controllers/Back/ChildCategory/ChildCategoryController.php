<?php

namespace App\Http\Controllers\Back\ChildCategory;

use App\Childcategory;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ChildCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function store(Request $request)
    {
        if ($request->values != '') {
            for ($i = 0; $i < sizeof($request->values); $i++) {
                Childcategory::create(['subcategory_id' => $request->id, 'childcategory' => $request->values[$i]]);
            }
            Cache::forget('allCategories');
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something is wrong.');
        }
    }


    public function edit($id)
    {
        $subcategories = Subcategory::select('id', 'subcategory')->get();
        $childcategory = Childcategory::with('subcategory')->where('id', $id)->first();

        return view('back.category.childcategoryedit', compact('subcategories', 'childcategory'));
    }


    public function update(Request $request, $id)
    {
        Childcategory::where('id', $id)->update(['subcategory_id' => $request->subcategory_id, 'childcategory' => $request->childcategory]);
        return redirect(route('categorycreate'))->with('success', 'Recored Successfully Updated.');
    }

    public function destroy($id)
    {
        Childcategory::find($id)->delete();
        return redirect()->back()->with('success', 'Record Successfully Deleted ');
    }
}
