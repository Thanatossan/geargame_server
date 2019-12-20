<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(){
        $data = User::all();
        return json_encode($data);
    }
}
