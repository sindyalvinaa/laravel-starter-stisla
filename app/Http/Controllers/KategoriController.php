<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Pengacara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request){

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

        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Tambahkan');

    }
    public function updateKategori(Request $request, $id){
        $data = Kategori::find($id);
        $data ->update($request->all());

        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Update');
    }
    public function delete($id){
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Hapus');
    }
}
