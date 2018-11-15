<?php
namespace Omatech\EnvCornerComponent;

use Illuminate\Support\ServiceProvider;

class EnvCornerComponentServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views/components/', 'EnvCornerComponent');
    }

    /**
     * Register the application service providers.
     *
     * @return void
     */
    public function register()
    {
        $this->providers();

    }

    private function providers()
    {
    }
}