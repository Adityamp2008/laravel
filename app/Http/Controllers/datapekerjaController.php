<?php

namespace App\Http\Controllers;
use App\models\pekerja;
use Illuminate\Http\Request;

class datapekerjaController extends Controller
{
    //
    public function pekerja(){
        $pekerja = pekerja::get();
        return view('page/data-pekerja',['pekerja'=>$pekerja]);
    }
}
