<?php

namespace App\Http\Controllers;

use App\judge;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(){
        $passQuery = judge::where('judge.password','=','1234')->where('judge.username','=','cmu')->get();
        echo count($passQuery);
        return "ok";
    }
}
