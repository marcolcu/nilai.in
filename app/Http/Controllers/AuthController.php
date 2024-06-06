<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function getLogin(){
        return view("login");
    }

    public function postLogin(Request $request){
        $valid = Auth::attempt(['email'=> $request->email,
        'password'=> $request->password]);

        if($valid){
            return redirect("/");
        }else{
            return redirect()->back()->withErrors('Authentication Error');
        }
    }


    public function getLogout(){
        Auth::logout();
        return redirect("/");
    }
}
