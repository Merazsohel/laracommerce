<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable=['customer_id','product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
