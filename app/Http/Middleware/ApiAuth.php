<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class ApiAuth
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
        $user = User::where('api_token', $request->api_token)->first();
        if(!is_null($user)){
            return $next($request);
        }

        return response()->json([
            'Etat' => "Erreur vous n'avez pas de token"
        ]);
    }
}
