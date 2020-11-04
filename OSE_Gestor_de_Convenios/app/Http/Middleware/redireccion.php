<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class redireccion
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
        if (Auth::user()->id==1) {
            return redirect()->route('RegistroAdministrador.index');

        }
        else{
            dd('no tiene permiso para agregar otro usuario');
        }

        return $next($request);
    }
}
