<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['address','customer_id','delivery_charge','total','cycle','code'];

    public function product()
    {
        return $this->belongsToMany(Product::class,'order_products')->withPivot('qty','attr','id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

}
