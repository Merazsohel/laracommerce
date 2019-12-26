<?php

namespace App\Http\Controllers\Back\Brand;

use App\Brand;
use Illuminate\Http\Request;
use App\CustomClasses\ManageImage;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $brands = Brand::all();
        return view('back.brand.index', compact('brands'));
    }


    public function create()
    {
        return view('back.brand.create');
    }


    public function store(Request $request)
    {
        Brand::insert([
            'name' => $request->name,
            'photo' => ManageImage::insertImage('public/image/brand-images', $request->photo)
        ]);
        return redirect()->back()->with('success', 'Record Successfully Inserted !!!.');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('back.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            $data = Brand::select('photo')->where('id', $id)->first();
            ManageImage::deleteImage('public/image/brand-images/' . $data->photo);
            Brand::where('id', $id)->update([
                'name' => $request->name,
                'photo' => ManageImage::insertImage('public/image/brand-images', $request->photo)
            ]);
        }

        Brand::where('id', $id)->update([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }

    public function destroy($id)
    {
        $data = Brand::select('photo')->where('id', $id)->first();
        ManageImage::deleteImage('public/image/brand-images/' . $data->photo);
        Brand::find($id)->delete();
        return redirect(route('brandindex'))->with('success', 'Record Successfully Inserted ');
    }
}
