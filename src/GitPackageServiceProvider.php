<?php

namespace AbiReader;

use Illuminate\Support\ServiceProvider;

class GitPackageServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    public function register(){
       
    }

}