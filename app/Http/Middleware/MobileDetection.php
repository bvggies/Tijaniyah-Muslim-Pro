<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileDetection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userAgent = $request->header('User-Agent');
        $isMobile = $this->isMobile($userAgent);
        
        // Store mobile detection in session
        session(['is_mobile' => $isMobile]);
        
        // Add mobile class to view data
        view()->share('isMobile', $isMobile);
        
        return $next($request);
    }
    
    /**
     * Detect if the request is from a mobile device
     */
    private function isMobile($userAgent)
    {
        $mobileKeywords = [
            'Mobile', 'Android', 'iPhone', 'iPad', 'iPod', 'BlackBerry',
            'Windows Phone', 'Opera Mini', 'IEMobile', 'Mobile Safari',
            'webOS', 'Palm', 'Nokia', 'Samsung', 'LG', 'Sony', 'HTC'
        ];
        
        foreach ($mobileKeywords as $keyword) {
            if (stripos($userAgent, $keyword) !== false) {
                return true;
            }
        }
        
        return false;
    }
}