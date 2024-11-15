<?php
namespace App\Repositories\Artisan;

use Illuminate\Support\Facades\Artisan;

class ArtisanService{
    public static function fireCleanArtisanCommand($command){
        Artisan::call($command);
        $result = Artisan::output();
        return $result;
    }
}