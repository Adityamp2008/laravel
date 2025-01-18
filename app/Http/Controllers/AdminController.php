<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('admin.home');
        }
        public function user()
        {
            return view('home');
            }
}
