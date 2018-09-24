<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
            $redirectstr='';
            $actions=$request->route()->getAction();
            $roles=isset($actions['roles'])? $actions['roles']:null;
            if (Auth::user()->hasAnyRole($roles)){
                $redirectstr=$roles[0];
                return redirect('/'.$redirectstr);
            }
=======
>>>>>>> d360023cbe9d7b60c27642ad6a2c723e66edd221
            return redirect('/home');
        }

        return $next($request);
    }
}
