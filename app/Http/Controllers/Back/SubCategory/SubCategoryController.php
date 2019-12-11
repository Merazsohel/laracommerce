<?php

namespace App\Http\Controllers\Back\SubCategory;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->values != '')
        {
            for ($i = 0; $i < sizeof($request->values); $i++) {
                Subcategory::create(['category_id' => $request->id, 'subcategory' => $request->values[$i]]);
            }
        Cache::forget('allCategories');
        return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        else
        {
            return redirect()->back()->with('error','Something is wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select('id','category')->get();
        $subcategory = Subcategory::with('category')->where('id', $id)->first();
        return view('back.category.subcategoryedit', compact('categories', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Subcategory::where('id',$id)->update(['category_id'=>$request->category_id, 'subcategory'=> $request->subcategory]);
        return redirect(route('categorycreate'))->with('success','Recored Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::find($id)->delete();
        return  redirect()->back()->with('success','Record Successfully Deleted ');
    }
}
