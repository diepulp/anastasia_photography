<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //  null-safe operator is ?->
        if (auth()->user()?->name !== "diepulp") {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
