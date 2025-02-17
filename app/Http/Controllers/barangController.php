<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\barang;
 
class barangController extends Controller
{
    //
    public function tampil()
    {
        $barang = barang::all();
        return view('admin.barang.tampil', compact('barang'));
    }
    public function tambah(){
        return view('admin.barang.tambah');
        }
         public function edit($id)
        {
            $barang = Barang::findOrFail($id);
            return view('admin.barang.edit', compact('barang'));
        }
        public function update(Request $request, $id)
        {
            
            $barang = Barang::findOrFail($id);
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'tanggal_datang' => $request->tanggal_datang,
                'jenis' => $request->jenis,
            ]);
            return redirect()->route('admin.barang.tampil')->with('success', 'Barang berhasil diupdate');
        }
    

    public function post(request $req)
    {
        $id=$req->get('id');
        if($id){
            $barang = Barang::findOrFail($id);
        }
        else{
            $barang = new Barang();
        }


        $barang = new Barang;
        $barang->nama_barang = $req->nama_barang;
        $barang->tanggal_datang = $req->tanggal_datang;
        $barang->jenis = $req->jenis;
    $barang->save();
    return redirect()->route('admin.barang.tampil');
    }

    public function delete($id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('admin.barang.tampil');
    }
}