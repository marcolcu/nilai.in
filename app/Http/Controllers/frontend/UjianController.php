<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    //
    public function index()
    {
        return view('ujian.ujian_list');
    }
}
