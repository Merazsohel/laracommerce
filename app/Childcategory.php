<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Childcategory extends Model
{
    public $timestamps=false;
    protected $fillable=['subcategory_id','childcategory'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class)->select('id');
    }
}
