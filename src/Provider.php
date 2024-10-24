<?php

namespace Biologed\ReviveXmlRpc;

use Illuminate\Support\ServiceProvider;

/**
 * Class Provider
 *
 * @package Artistan\ReviveXmlRpc
 * @
 */
class Provider extends ServiceProvider
{
    /**
     * Alias the services in the boot.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('revive-xmlrpc.php'),
        ], 'revive-xmlrpc-config');
    }

    /**
     * Register the services.
     */
    public function register()
    {
    }
}
