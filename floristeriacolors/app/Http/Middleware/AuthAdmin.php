<?php

namespace FloristeriaColors\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AuthAdmin
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
        if(Auth::user()){
            $usuario_actual = Auth::user();
            if($usuario_actual->is_admin==0){
                return redirect('/admin/login');
            }else{
                return $next($request);

            }

        }else{
            return redirect('/admin/login');
        }
        
        
    }

    
}
