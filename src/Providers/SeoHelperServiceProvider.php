<?php

namespace Embit88\SeoHelper\Providers;

use Embit88\SeoHelper\Services\SeoHelper;
use Illuminate\Support\ServiceProvider;

class SeoHelperServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('seohelper', function (){
            return new SeoHelper();
        });
    }

    public function boot(): void
    {

    }
}
