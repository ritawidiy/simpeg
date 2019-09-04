<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->level == '7') {
                return redirect()->route('user_page')->with('signed', 'Anda telah masuk');//Return to Pegawai Page
            } elseif (Auth::user()->level == '45') {
                return redirect()->route('admin_page')->with('signed', 'Anda telah masuk');//return to Admin Page
            } elseif (Auth::user()->level == '') {
                return redirect()->route('dashboard.admin')->with('signed', 'Anda telah masuk');//Return to unit kerja Page
            }
        }

        return $next($request);
    }
}
