<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable=['title','review','publisher','product_id','customer_id'];

    public function product()
    {
        return $this->belongsTo(Product::class)->select('title','id');
    }
}
