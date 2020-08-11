<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Petani
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
        $user = Auth::user();
        if ($user->role == 'petani' && $user->is_kyc == 'success') {
            return $next($request);
        } else {
            return redirect()->route('kyc');
        }
    }
}
