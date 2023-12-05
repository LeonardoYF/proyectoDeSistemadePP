<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AprobacionUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * 
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            $user = Auth::user();

            // Verificar el estado del usuario
            if ($user->estado == 'APROBADO') {
                // El usuario está aprobado, permitir el acceso
                return $next($request);
            } else {
                // El usuario no está aprobado, redirigir a "espera-aprobacion" con un mensaje
                return redirect('espera-aprobacion')->with('estado',$user->estado);
            }
        }

        // Si el usuario no está autenticado, continuar con la solicitud
        return $next($request);
    }
}
