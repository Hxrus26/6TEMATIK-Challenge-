<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    protected function Handle($request, Closure $next)
    {
        // Verification de l'user
        // $user = $request->user();
        // if ($user === null || $user->isAdmin() === 0) {
        //     $request->session()->flash('error', 'Access Denied');
        //     return redirect('');
        // }
        return $next($request);
    }
}
