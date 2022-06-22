<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Pengacara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request){


        $kategoris = DB::table('kategoris')
        ->when($request->input('kategori'), function ($query, $kategori) {
            return $query->where('kategori', 'like', '%' . $kategori . '%');
        })
        ->select('id', 'kategori', 'keterangan')
        ->paginate(10);
        return view('user.kategori', compact('kategoris'));
    }
    public function tambahKategori(){
        return view('kategoris.tambahKategori');
    }
    public function tampilKategori($id){
        $kategori = Kategori::find($id);
        return view('kategoris.tampilKategori', compact('kategori'));
    }
    public function insertKategori(Request $request){
        Kategori::create($request->all());

        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Tambahkan');
    }
    public function updateKategori(Request $request, $id){
        $kategori = Kategori::find($id);
        $kategori ->update($request->all());

        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Update');
    }
    public function delete($id){
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('kategori')->with('success', 'kate$kategori Kategori Berhasil Di Hapus');
    }
}
