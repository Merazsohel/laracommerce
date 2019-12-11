<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{

    protected $fillable = [
        'email','fname','lname', 'password','username','gender'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
