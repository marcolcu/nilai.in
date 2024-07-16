<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgressUjianController extends Controller
{
    //
    public function index()
    {
        return view('progressujian.progressujian_list');
    }
}
