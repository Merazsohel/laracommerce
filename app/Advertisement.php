<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'subtitle', 'link', 'position', 'photo'];
}
