<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public funtion Tugas1()

    // {
    //     return view('Tugas1');
    // }
    // public funtion Tugas2()
    // {
    //     return view('Tugas2');
    // }
    public function master()
    {
        return view('template\seperate\master');
    }
}

