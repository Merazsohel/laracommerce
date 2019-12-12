<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps=false;
    protected $fillable=['category_id','subcategory'];

    public function childcategory()
    {
        return $this->hasMany(Childcategory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->select('id');
    }

    public function product()
    {
        return $this->hasMany(Product::class,'subcategory_id');
    }
}
