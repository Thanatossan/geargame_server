<?php

namespace App\Http\Controllers;

use App\incomingMatch;
use App\match;
use App\Http\Controllers\Controller;

class matchController{
    public function getMatch(){
        return match::all();
    }

    public function imcomingMatch(){
        return incomingMatch::all();
    }
}