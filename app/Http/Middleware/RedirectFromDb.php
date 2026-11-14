<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;

class RedirectFromDb
{
    public function handle(Request $request, Closure $next)
    {
        $path = '/'.ltrim($request->path(), '/');

        $redirects = cache()->rememberForever('redirects.active', function () {
            return Redirect::active()
                ->get()
                ->mapWithKeys(fn ($item) => [rtrim($item->from, '/') ?: '/' => $item])
                ->all();
        });

        $item = $redirects[rtrim($path, '/') ?: '/'] ?? null;

        if ($item !== null) {
            return redirect($item->to, $item->type);
        }

        return $next($request);
    }
}
