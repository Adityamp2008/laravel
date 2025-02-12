<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dasboardController extends Controller
{
    //
    public function datadasboard()
    {
        
        return view('data-dasboard.tabel');
    }
}
