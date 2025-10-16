<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorCounterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $today = Carbon::today()->toDateString();

        // Cek apakah IP ini sudah tercatat hari ini
        $alreadyVisited = Visitor::where('ip_address', $ip)
            ->where('visit_date', $today)
            ->exists();

        if (!$alreadyVisited) {
            Visitor::create([
                'ip_address' => $ip,
                'visit_date' => $today,
            ]);
        }

        // dd('middleware jalan');
        return $next($request);
    }
}
