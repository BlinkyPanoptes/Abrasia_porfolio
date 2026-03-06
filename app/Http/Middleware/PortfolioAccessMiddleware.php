<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PortfolioAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        \Log::info('Portfolio page accessed: '.$request->path());

        return $next($request);
    }
}