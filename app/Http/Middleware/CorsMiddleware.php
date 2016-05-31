<?php

namespace ClevAppBcRestApi\Http\Middleware;

use Illuminate\Http\Response;

use Closure;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
        header("Access-Control-Allow-Origin: *");

         // ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];

        if($request->getMethod() == "OPTIONS")
            return Response::make('OK', 200, $headers);  // The client-side application can set only headers allowed in Access-Control-Allow-Headers

        $response = $next($request);
        
        foreach($headers as $key => $value) 
            $response->header($key, $value);

         return $response;
    }
}
