<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('profile.profile');
    }
}
