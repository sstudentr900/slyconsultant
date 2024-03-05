<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Routing\UrlGenerator;//UrlGenerator
// use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $http_type = ($_SERVER['APP_URL']  == 'http://localhost:3000' ? 'http' : 'https');
        // dd(URL()->full());
        // dd(URL()->full(),URL()->full()=='http://localhost:3000');
        // $http_type = (URL()->full() == 'http://localhost:3000' ? 'http' : 'https');
        // dd(URL()->full(),'http://localhost:3000',URL()->full()=='http://localhost:3000');

        // if(URL()->full()=='http://localhost:3000'){
        //     \URL::forceScheme('https');
        // }else{
        //     \URL::forceScheme('http');
        // }
        // \URL::forceScheme('http');
        // $http_type = "http";
        // $URL->forceScheme($http_type);
        // if($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }
        //本地端使用http
        // $http_type = (str_contains(URL()->full(),'127')) ? 'http' : 'https';
        // $URL->forceScheme($http_type);
        // \URL::forceScheme('https');
    }
}
