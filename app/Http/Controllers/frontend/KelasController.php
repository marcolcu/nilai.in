<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index()
    {
        return view('kelas.kelas_list');
    }
}
