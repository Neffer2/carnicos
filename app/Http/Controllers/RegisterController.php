<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Models\User;

class RegisterController extends Controller
{   
    public function show (){ 
        if (Auth::check()){
            return redirect('welcome');
        }
        return view('auth.register');
    }

    public function register (RegisterRequest $request){
        $user = User::Create([
            $user->cod_user = 
            email
            documento
            password	 
        ]);
    }
}
