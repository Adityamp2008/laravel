<?php

namespace App\Http\Controllers;
use App\models\barang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    //
    public function barang(){
        $barang = barang::get();
        return view('page/data-barang',['barang'=>$barang]);
    }
}
