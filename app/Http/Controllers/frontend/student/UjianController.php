<?php

namespace App\Http\Controllers\frontend\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    //
    public function index()
    {
        return view('s.ujian.ujian');
    }
    public function detail()
    {
        return view('s.ujian.ujian_detail');
    }
}
