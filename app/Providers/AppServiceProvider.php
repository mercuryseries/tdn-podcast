<?php

namespace App\Providers;

use App\Utilities\MimeReader;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('audio', function($attribute, $value, $parameters)
        {
            $allowed = array('audio/mpeg', 'application/ogg', 'audio/wave', 'audio/aiff');
            $mime = new MimeReader($value->getRealPath());
            return in_array($mime->get_type(), $allowed);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
