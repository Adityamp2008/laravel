<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\keuangan;
 
class keuanganController extends Controller
{
    //
    public function tampil()
    {
        $keuangan = keuangan::all();
        return view('admin.keuangan.tampil', compact('keuangan'));
    }
    public function tambah(){
        return view('admin.keuangan.tambah');
        } public function edit($id)
        {
            $barang = keuangan::find($id);
            return view('admin.keuangan.edit', compact('keuangan'));
        }
        public function update(Request $request, $id)
        {
            
            $keuangan = keuangan::findOrFail($id);
            $keuangan->update([
                'masuk' => $request->masuk,
                'keluar' => $request->keluar,
            ]);
            return redirect()->route('admin.keuangan.tampil')->with('success', 'Barang berhasil diupdate');
        }
    

    public function post(request $req)
    {
        $id=$req->get('id');
        if($id){
            $keuangan = keuangan::findOrFail($id);
        }
        else{
            $keuangan = new keuangan();
        }


        $keuangan = new keuangan;
        $keuangan->masuk = $req->masuk;
        $keuangan->keluar = $req->keluar;
    $keuangan->save();
    return redirect()->route('admin.keuangan.tampil');
    }

    public function delete($id)
    {
        $keuangan = keuangan::findOrFail($id);
        $keuangan->delete();
 return redirect()->route('admin.keuangan.tampil');
    }
}