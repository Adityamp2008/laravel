<?php

namespace App\Http\Controllers;
use App\models\keuangan;
use Illuminate\Http\Request;

class datakeuanganController extends Controller
{
    //
    public function keuangan(){
        $keuangan = keuangan::get();
        return view('page/data-keuangan',['keuangan'=>$keuangan]);
    }
}
