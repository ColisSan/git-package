<?php

namespace GitPackage;

use Illuminate\Support\ServiceProvider;

class GitPackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'git-package');
        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/git-package')
        ], ['git-package-assets', 'laravel-assets']);
    }

    public function register(){

    }

}
