<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\judge;
class userLoginController extends Controller
{
    
    public function auth(Request $request){
        $username = $request->input('user.username');
        $password = $request->input('user.password');
        $permission = 'false';
        $passQuery = judge::where('judge.password','=',$password)->where('judge.username','=', $username)->get();
        if(count($passQuery) > 0){
            $permission = 'true';
        }else{
            $permission = 'false';
        }
        return $permission ;
    }
}

