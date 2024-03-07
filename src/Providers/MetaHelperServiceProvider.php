<?php

namespace Embit88\MetaHelper\Providers;

use Embit88\MetaHelper\Services\MetaHelper;
use Illuminate\Support\ServiceProvider;

class MetaHelperServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('metahelper', function (){
            return new MetaHelper();
        });
    }

    public function boot(): void
    {

    }
}
