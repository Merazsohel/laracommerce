<?php

namespace App\Http\Controllers\Back\Brand;

use App\Brand;
use Illuminate\Http\Request;
use App\CustomClasses\ManageImage;
use App\Http\Controllers\Controller;

class BrandController extends Controller
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
        $brands = Brand::all();
        return view('back.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brand::insert([
            'name'=>$request->name,
            'photo'=>ManageImage::insertImage('image/brand-images',$request->photo)
            ]);
        return redirect()->back()->with('success','Record Successfully Inserted !!!.');
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
        $brand = Brand::find($id);
        return view ('back.brand.edit',compact('brand'));
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
        if($request->hasFile('photo')){
            $data = Brand::select('photo')->where('id', $id)->first();
            ManageImage::deleteImage('image/brand-images/'.$data->photo);
            Brand::where('id',$id)->update([
                'name'=>$request->name,
                'photo'=>ManageImage::insertImage('image/brand-images',$request->photo)
                ]);
        }
        
        Brand::where('id',$id)->update([
            'name'=>$request->name,
            ]);
        return redirect()->back()->with('success','Record Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Brand::select('photo')->where('id', $id)->first();
        ManageImage::deleteImage('image/brand-images/'.$data->photo);
        Brand::find($id)->delete();
        return  redirect(route('brandindex'))->with('success','Record Successfully Inserted ');
    }
}
