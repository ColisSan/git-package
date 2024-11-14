<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PublicController extends Controller
{

    public function index($response){
        return view('index');
    }
}