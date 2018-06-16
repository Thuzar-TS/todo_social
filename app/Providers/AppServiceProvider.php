<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::directive('isAdmin', function(){            
        if (Auth::check())
            return (Auth::user()->is_admin === 1)?true:false;         
    
            return false;
        });

        Blade::directive('isFriend', function(){            
        if (Auth::check()) 
            return (Auth::user()->is_admin === 0)?true:false; 

            return false;
        });

    }

    public function register()
    {
        //
    }
}
