<?php

namespace App\Http\Controllers\frontend\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    //
    public function index()
    {
        return view('s.matapelajaran.materi.materi');
    }

    public function detail()
    {
        return view('s.matapelajaran.materi.detail');
    }
}
