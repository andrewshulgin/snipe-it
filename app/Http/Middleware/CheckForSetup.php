<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;

class CheckForSetup
{
    public function handle($request, Closure $next)
    {
        if (Setting::setupCompleted()) {
            if ($request->is('setup*')) {
                return redirect(url('/'));
            } else {
                return $next($request);
            }
        } else {
            if (! ($request->is('setup*')) && ! ($request->is('.env')) && ! ($request->is('health'))) {
                return redirect(url('/').'/setup');
            }

            return $next($request);
        }
    }
}
