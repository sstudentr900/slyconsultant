<?php

namespace App\Http\Middleware;
use Closure;

class HttpsProtocol
{
    public function handle($request, Closure $next)
    {
        //1.url 是 http
        $url = $request->url();
        $check = strstr($url,"http://"); 
        if($check){
            // is http
            return redirect()->secure($request->getRequestUri());
        }

        //2.$request->secure() 判斷請求是否為 SSL
        if(!$request->secure()){
            // is http
            return redirect()->secure($request->getRequestUri());
        }

        // dd($request->getRequestUri()); //網址 SELF

        return $next($request); 
    }
}
