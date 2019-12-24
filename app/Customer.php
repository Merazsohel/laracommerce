<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{

    protected $fillable = [
        'customer_name','email_address','mobile_number', 'password','address'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
