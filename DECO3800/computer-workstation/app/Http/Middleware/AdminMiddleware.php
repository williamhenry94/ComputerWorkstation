<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        // return $next($request);
        $bridgedRequest  = Request::createFromRequest($request);
        $bridgedResponse = new Response();
    
        if (App::make('oauth2')->verifyResourceRequest($bridgedRequest, $bridgedResponse)) {
            return $next($request);
        }
        else {
            return response()->json(array(
                'error' => 'Unauthorized'
            ), $bridgedResponse->getStatusCode());
        }
    }
}
