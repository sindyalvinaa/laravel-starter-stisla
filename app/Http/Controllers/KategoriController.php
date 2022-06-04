<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Pengacara;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori(){
        $data = Kategori::paginate(5);
        return view('kategoris.kategori',compact('data'));
    }
    public function tambahKategori(){
        return view('kategoris.tambahKategori');
    }
    public function tampilKategori($id){
        $data = Kategori::find($id);
        return view('kategoris.tampilKategori', compact('data'));
    }
    public function insertKategori(Request $request){
        Kategori::create($request->all());

        return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Di Tambahkan');
    }
    public function updateKategori(Request $request, $id){
        $data = Kategori::find($id);
        $data ->update($request->all());

        return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Di Update');
    }
    public function delete($id){
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Di Hapus');
    }
}
