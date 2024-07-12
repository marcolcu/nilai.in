<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function getLogin()
    {
        $kelases = Kelas::all();
        return view("login", compact("kelases"));
    }

    public function postLogin(Request $request)
    {
        $valid = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($valid) {
            return redirect("/dashboard");
        } else {
            return redirect()->back()->withErrors('Authentication Error');
        }
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'nama'  => 'required|alpha:ascii',
            'peran'  => 'required',
            'password' => ['required', 'string', 'min:6', 'regex:/[0-9]/', 'confirmed'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('login', compact('errors'));
        }

        $users = User::all();
        foreach ($users as $user) {
            if ($request->email == $user->email) {
                $errors = ['email' => 'Email already used, please input another email'];
                return view('login', compact('errors'));
            }
        }
        $user = new User();
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->peran = $request->peran;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect("/dashboard")->with('success', 'Successfully Registered.');
    }


    public function getLogout()
    {
        Auth::logout();
        return redirect("/");
    }
}
