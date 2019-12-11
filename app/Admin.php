<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = ['firstName', 'lastName', 'email', 'password'];


    public function roles()
    {
        return $this->belongsToMany('App\Role','admin_role','admin_id','role_id')->withPivot('id');
    }


    public function hasManyRole($roles)
    {
        if(is_array($roles))
        {
            foreach ($roles as $role)
            {
                if($this->hasRole($role))
                {
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles))
            {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('role',$role)->first())
        {
            return true;
        }
        return false;
    }

}
