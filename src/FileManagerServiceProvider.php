<?php

namespace amin101\ResponsiveFileManager;
;

use Illuminate\Support\ServiceProvider;

class FileMangerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/filemanager/config/config.php'  =>  config_path('rfm.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}