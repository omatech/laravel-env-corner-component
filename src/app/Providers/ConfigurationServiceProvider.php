<?php

namespace Omatech\EnvCornerComponent\App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigurationServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function register()
    {
        $this->configuration();
    }

    /**
     * Register configurations.
     *
     * @return void
     */
    private function configuration()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/env-corner-component.php', 'env-corner-component'
        );
    }
}