<?php

namespace App\Http\Middleware;

use App\Models\Visitor as ModelsVisitor;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $agent = new Agent();
        $device = $agent->device();
        $browser = $agent->browser();

        ModelsVisitor::create([
            'ip_address' => request()->ip(),
            'device' => $device,
            'browser' => $browser,
            'referer' => url()->previous(),
            'user_agent' => request()->userAgent(),
        ]);
        return $next($request);
    }
}
