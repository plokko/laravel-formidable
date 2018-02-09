<?php

namespace Plokko\Formidable;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/formidable.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('formidable.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'formidable'
        );

        $this->app->bind('formidable', function () {
            return new Formidable(config('formidable'));
        });
    }
}
