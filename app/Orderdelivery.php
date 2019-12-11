<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdelivery extends Model
{
    protected  $fillable=['order_id','delivery_id','delivery_charge'];
}
