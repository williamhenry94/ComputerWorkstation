<?php

namespace App\Http\Middleware;

use Closure;

class ToolsMiddleware
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
        if ($request->isMethod('options')) {
            return response('', 200)
              ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
              ->header('Access-Control-Allow-Headers', 'Accept, Content-Type, 
                X-XSRF-Token, X-CSRF-Token, Origin'); // Add any required headers here
        }
        return $next($request);
    }
}
