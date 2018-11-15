<?php

namespace Omatech\EnvCornerComponent\App\Providers;

use Illuminate\Support\ServiceProvider;

class PublishServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->publish();
    }

    /**
     * Publish configurations.
     *
     * @return void
     */
    private function publish()
    {
        $this->publishes([
            __DIR__.'/../../config/env-corner-component.php' => config_path('env-corner-component.php'),
        ]);

        $this->publishes([
            __DIR__.'/../../resources/views/components/corner.blade.php' => resource_path('views/components/vendor/corner.blade.php'),
        ]);
    }
}