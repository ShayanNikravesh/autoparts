<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class DenyOperator
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */

    public function handle(Request $request, Closure $next, string $role): Response
    {
        //Check Level
        if ($request->user()->level == $role) {
            
            return $next($request);

        }
 
        Alert::error('اخطار', 'اجازه دسترسی ندارید.');

        return redirect()->back();
        
    }
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
}
