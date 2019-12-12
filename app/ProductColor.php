<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    public $timestamps=false;
    protected $fillable=['product_id','color'];
}
