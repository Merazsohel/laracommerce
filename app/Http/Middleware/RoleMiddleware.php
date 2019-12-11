<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()===null)
        {
            return response('Not authored!! sfdg234huiwh43251543521rg4214u2143ihu21431241ierg^%&*%$&$#^@$#%^!#%^$^%#hgdfghfgdhfgdh');
        }

        $action=$request->route()->getAction();
        $roles=isset($action['role']) ? $action['role']:null;

        if($request->user()->hasManyRole($roles ) || !$roles){
            return $next($request);
        }
        return response('Not authored!!  sfdg234huiwh43251543521rg4214u2143ihu21431241ierg^%&*%$&$#^@$#%^!#%^$^%#hgdfghfgdhfgdh');
    }
}
