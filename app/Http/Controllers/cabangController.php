<?php

namespace App\Http\Controllers;
use App\models\cabang;
use Illuminate\Http\Request;

class cabangController extends Controller
{
    //
 
    public function tampil()
    {
        $cabang = cabang::all();
        return view('admin.cabang.tampil', compact('cabang'));
    }
    public function tambah(){
        return view('admin.cabang.tambah');
    }
    public function edit($id)
    {
        $cabang = cabang::findOrFail($id);
        return view('admin.cabang.edit', compact('cabang'));
    }
    public function update(Request $request, $id)
    {
        
        $cabang = cabang::findOrFail($id);
        $cabang->update([
            'nama_cabang' => $request->nama_cabang,
            'alamat' => $request->alamat,
            'pegawai' => $request->pegawai,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('admin.cabang.tampil')->with('success', 'Barang berhasil diupdate');
    }
    public function post(request $req)
    {

        $id=$req->get('id');
        if($id){
            $cabang = cabang::findOrFail($id);
        }
        else{
            $cabang = new cabang();
        }

        $cabang = new cabang();
        $cabang->nama_cabang = $req->nama_cabang;
        $cabang->alamat = $req->alamat;
        $cabang->pegawai = $req->pegawai;
        $cabang->tanggal = $req->tanggal;
        $cabang->save();
        return redirect()->route('admin.cabang.tampil');
    }
    public function delete($id)
    {
        $cabang = cabang::findOrFail($id);
        $cabang->delete();

        return redirect()->route('admin.cabang.tampil');
    }
}
