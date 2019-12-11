<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=['name', 'companyname', 'phone', 'email', 'address'];
}
