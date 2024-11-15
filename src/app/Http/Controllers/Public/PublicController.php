<?php

namespace App\Http\Controllers\Public;

use App\Enums\CommandType;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ArtisanCommandRequest;
use App\Repositories\Artisan\ArtisanService;
use Exception;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Session;

class PublicController extends BaseController
{
    public function index(){
        $data['result'] = null;
        return view('git-package::index', $data);
    }
  
    public function test(ArtisanCommandRequest $request){
        try{
            $command = $request['artisan_command'];
            $commandType = $request['command_type'];

            $result = null;
            $commandTypeEnum = CommandType::tryFrom($commandType);

            if(!$commandTypeEnum){
                $data['result'] = 'We could not detect your command.';
                return view('git-package::index', $data);
            }
            switch ($commandTypeEnum) {
                case CommandType::ARTISAN_NewModel:
                case CommandType::ARTISAN_MakeMigration:
                    $result = ArtisanService::fireCleanArtisanCommand($command);
                    break;
                case CommandType::ARTISAN_Migrate:
                    $command = $commandType;
                    if(isset($request['fresh_options']) && $request['fresh_options']){
                        $command = $command . ':' . $request['fresh_options'];
                    }
                    if(isset($request['dbseed_options']) && $request['dbseed_options']){
                        $command = $command . ' ' . $request['dbseed_options'];
                    }
                    $result = ArtisanService::fireCleanArtisanCommand($command);
                    break;
                
                default:
                    # code...
                    break;
            }
            $data['result'] = $result;
        }catch(Exception $e){
            $data['result'] = $e->getMessage();
            return view('git-package::index',$data);
        }
        return view('git-package::index', $data);
    }
}
