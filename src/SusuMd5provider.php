<?php

namespace Susu\Md5;

use Illuminate\Support\ServiceProvider;

class SusuMd5Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('susu',function(){
           return new Md5hash();
        });
    }
}
