<?php

namespace CoderStudios\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Cache\Factory as Cache;

class ClearCache
{
    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Cache\Repository  $cache
     * @return void
     */
    public function __construct(Cache $cache)
    {
        $this->views_cache = $cache->store('frontend_views');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     */
    public function handle($request, Closure $next)
    {
        if (config('app.env') != 'production') {
            $this->views_cache->flush();
        }

        return $next($request);
    }
}
