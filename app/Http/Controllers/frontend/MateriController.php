<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    //
    public function index()
    {
        return view('materi.materi_list');
    }
}
