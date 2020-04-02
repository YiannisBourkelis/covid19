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
        if ($request->route()->named('change_country')){
            return $next($request);
        }

        if ($request->isMethod('post')){
            return $next($request);
        }

        if ( session()->has('country')){
            $session_country = session()->get('country');
        } else {
            $reader = new Reader('/usr/share/GeoIP/GeoLite2-Country.mmdb');
            $isoCode = '';
            try {
                $isoCode = $reader->country($request->ip())->country->isoCode; // GR / CY / other
            } catch(\Exception $e)
            {
            }

            if ($isoCode == 'CY'){
                $session_country = 'cyprus';
            } else {
                $session_country = '';
            }
            //$session_country = 'cyprus';

            session(['country' => $session_country]);
        }

        if ($session_country == 'cyprus'){
            $uri = $request->route()->uri;
            if ($uri !== '/' && substr( $uri, 0, 7 ) !== ("cyprus" . "/")){
                $new_uri = $session_country . "/" . $uri;
                return redirect($new_uri);
            }
        }

        return $next($request);
    }
}
