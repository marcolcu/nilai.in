<?php

namespace App\Http\Controllers\frontend\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    //
    public function index()
    {
        return view('s.matapelajaran.matapelajaran');
    }
}
