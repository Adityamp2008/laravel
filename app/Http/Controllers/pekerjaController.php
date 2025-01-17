<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pekerjaController extends Controller
{
    //
    public function tampil()
    {
        return view('admin.pekerja.tampil');
    }
    public function tambah(){
        return view('admin.pekerja.tambah');
    }
    public function edit(){
        return view('admin.pekerja.edit');
    }
}
