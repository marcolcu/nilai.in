<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    //
    public function index()
    {
        return view('kursus');
    }

    public function component() {
        return view('component.table-kursus');
    }
}
