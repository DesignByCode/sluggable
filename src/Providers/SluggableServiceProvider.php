<?php

namespace DesignByCode\Sluggable\Providers;

use Illuminate\Support\ServiceProvider;


class SluggableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setConfig();
    }


    protected function setConfig()
    {
        $path = dirname(__DIR__) . '/config/sluggable.php';
        if ($this->app instanceof \Illuminate\Foundation\Application) {
            $this->publishes([ $path => config_path('sluggable.php')], 'DesignByCode Sluggable Config');
        }
        $this->mergeConfigFrom($path, 'sluggable.php');
    }


}
