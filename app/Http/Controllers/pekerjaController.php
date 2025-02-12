<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pekerja;
 
class pekerjaController extends Controller
{
    //
    public function tampil()
    {
        $pekerja = pekerja::all();
        return view('admin.pekerja.tampil', compact('pekerja'));
    }
    public function tambah(){
        return view('admin.pekerja.tambah');
        }
         public function edit($id)
        {
            $pekerja = pekerja::findOrFail($id);
            return view('admin.pekerja.edit', compact('pekerja'));
        }
        public function update(Request $request, $id)
        {
            // Temukan barang berdasarkan ID
            $pekerja = pekerja::findOrFail($id);
            $pekerja->tampil([
                'nama_pekerja' => $request->nama_pekerja,
                'umur' => $request->umur,
                'gaji' => $request->gaji,
            ]);
            return redirect()->route('admin.pekerja.tampil')->with('success', 'Barang berhasil diupdate');
        }
    

    public function post(request $req)
    {
        $id=$req->get('id');
        if($id){
            $pekerja = pekerja::findOrFail($id);
        }
        else{
            $pekerja = new pekerja();
        }


        $pekerja = new pekerja;
        $pekerja->nama_pekerja = $req->nama_pekerja;
        $pekerja->umur = $req->umur;
        $pekerja->gaji = $req->gaji;
    $pekerja->save();
    return redirect()->route('admin.pekerja.tampil');
    }

    public function delete($id)
    {
        $pekerja = pekerja::findOrFail($id);
        $pekerja->delete();

        return redirect()->route('admin.pekerja.tampil');
    }
}