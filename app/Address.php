<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps=false;
    protected $fillable=['fname','customer_id','lname','phone','address','city'];
}
