<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role_id)
    {
        if ($request->user()->role_id != 1 && $request->user()->role_id != $role_id) {

            return redirect('home');

        }
    }
}

