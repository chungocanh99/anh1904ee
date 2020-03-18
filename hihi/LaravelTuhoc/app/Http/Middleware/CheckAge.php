<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        //thêm code kiểm tra tuổi
        $user = Auth::user();
        if($user->age >= 18) {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
