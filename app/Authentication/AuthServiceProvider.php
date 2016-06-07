<?php

namespace ClevAppBcRestApi\Authentication;

use Auth;
use ClevAppBcRestApi\Authentication\AppUserProvider;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Auth::provider('ingram_app_user_provider', function($app, array $config) {
            return new AppUserProvider();
        });
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}