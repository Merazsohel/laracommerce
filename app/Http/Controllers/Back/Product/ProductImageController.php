<?php

namespace App\Http\Controllers\Back\Product;

use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function editProductImage(Request $request)
    {
        return $productImage=ProductImage::with('product')->where('id',$request->id)->first();
    }

    public function update(Request $request)
    {
        $existingImage=ProductImage::find($request->id);
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(111111,999999).".".$extention;
            $file->move('image/product-images/',$filename);
            if(file_exists('image/product-images/'.$existingImage->image))
            {
                unlink('image/product-images/'.$existingImage->image);
            }
        }
        ProductImage::where('id',$request->id)->update(['image'=>$filename]);
        return redirect()->back()->with('success','Data Updated.');
    }
}
