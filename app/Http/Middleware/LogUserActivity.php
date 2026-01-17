<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; // CAMBIO: usar Facade Auth para evitar falsos errores del IDE
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ejecutar la petición y obtener la respuesta
        $response = $next($request);

        // Si el usuario está autenticado, registrar su actividad
        if (Auth::check()) {
            $user = Auth::user();

            // Por seguridad extra (aunque Auth::check() ya debería garantizarlo)
            if ($user) {
                Log::info('Actividad de usuario', [
                    'user_id'   => $user->id,
                    'user_name' => $user->name,
                    'method'    => $request->method(),
                    'url'       => $request->fullUrl(),
                    'ip'        => $request->ip(),
                ]);
            }
        }

        return $response;
    }
}
