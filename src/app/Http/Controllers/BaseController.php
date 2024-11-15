<?php

namespace App\Http\Controllers;

use App\Enums\OsTypeEnum;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Process;

class BaseController extends Controller
{
    public OsTypeEnum $OsType;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->OsType = OsTypeEnum::tryFrom(PHP_OS);

            if(!$this->OsType){
                $this->OsType = OsTypeEnum::Unknown;
            }
            return $next($request);           
        });
    }
}