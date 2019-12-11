<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps=false;
    protected $fillable=['category', 'photo'];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class)->select('id','subcategory','category_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class)->inRandomOrder()->limit(12);
    }

    public function subcategorywithchild()
    {
        return $this->hasManyThrough(Childcategory::class,Subcategory::class)->select('subcategory','childcategory');
    }
}
