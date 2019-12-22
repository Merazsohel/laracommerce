<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps=false;

    protected $fillable=['title','category_id','subcategory_id','child_category','supplier_id','brand_id','price','description','keypoint','supplierprice','pcode','created_by'];


    public function singleImage()
    {
        return $this->hasOne(ProductImage::class);
    }
    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function color()
    {
        return $this->hasMany(ProductColor::class);
    }

    public function size()
    {
        return $this->hasMany(ProductSize::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function review()
    {
        return $this->hasMany(Reviews::class);
    }


}
