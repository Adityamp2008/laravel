<?php

namespace App\Http\Controllers;
use App\models\cabang;
use Illuminate\Http\Request;

class datacabangController extends Controller
{
    //
    public function cabang(){
        $cabang = cabang::get();
        return view('page/data-cabang',['cabang'=>$cabang]);
    }
}
