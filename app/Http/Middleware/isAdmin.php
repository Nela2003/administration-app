<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { $userData = auth()->user();

        if ($userData && $userData->role_id == 1) {
            
            return $next($request);
        } elseif ($userData && $userData->role_id == 0) {
          
            return response()->view('panel',['userData' => $userData]);
        }

        abort(403, 'Unauthorized');
    }
      
}