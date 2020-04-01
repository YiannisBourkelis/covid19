<?php

namespace App\Http\Middleware;

use Closure;
use GeoIp2\Database\Reader;

class Localization
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
        if ( session()->has('country')){
            $session_country = session()->get('country');
        } else {
            $reader = new Reader('/usr/share/GeoIP/GeoLite2-Country.mmdb');
            $isoCode = $reader->country('1.1.1.1')->country->isoCode; // GR / CY / other
            if ($isoCode == 'CY'){
                $session_country = 'cyprus';
            } else {
                $session_country = 'greece';
            }
            session(['country' => $session_country]);
            session()->keep(['country']);
        }

        if ($session_country = 'cyprus'){

        }

        return $next($request);
    }
}
