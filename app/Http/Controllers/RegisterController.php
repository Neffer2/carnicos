<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{   
    public function show (){ 
        if (Auth::check()){
            return redirect('/'); 
        }
        return view('auth.register');
    } 

    public function register (RegisterRequest $request){

        $user = User::Create([
            'cod_user' => $request->cod_user,
            'email' => $request->email,
            'documento' => $request->documento,
            'password' => Hash::make($request->documento)
        ]);

        $user = Auth::getProvider()->retrieveByCredentials([
            'email' => $request->email,
            'password' => $request->password
        ]);
 
        Auth::login($user);
        return redirect()->route('home')->with('success', "Bienvenido, diviértete.");
    }
}
