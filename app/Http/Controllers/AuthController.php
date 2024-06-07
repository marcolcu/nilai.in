<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
            return redirect("/dashboard");
        }else{
            return redirect()->back()->withErrors('Authentication Error');
        }
    }

    public function postRegister(Request $request){
        $rules=[
            'email' => 'required|email|unique:users',
            'name'  => 'required|alpha:ascii',
            'password' => ['required', 'string', 'min:6', 'regex:/[0-9]/', 'confirmed'],
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $users = User::all();
        foreach ($users as $user) {
            if($request->email==$user->email){
                return back()->withErrors('Email already used, please input another email');
            }
        }
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::attempt(['email'=> $request->email, 'password'=> $request->password]);
        return redirect("/dashboard");
    }


    public function getLogout(){
        Auth::logout();
        return redirect("/");
    }
}
