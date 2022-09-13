<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{   
    public function jumping (){
        return view('games.jumping');
    }
}
