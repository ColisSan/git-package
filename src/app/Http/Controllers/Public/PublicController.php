<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Process;

class PublicController extends BaseController
{

    public function index(){
        return view('git-package::index');
    }
    
    public function test(){
        dump($this->OsType);
    }
}