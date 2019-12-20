<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userLoginController extends Controller
{
    
    public function auth(Request $request){
        $username = $request->input('user.username');
        $password = $request->input('user.password');
        return "res OK";
    }
}