<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengacara;
use Illuminate\Http\Request;

class PengacaraController extends Controller
{
    public function pengacara(Request $request){
        if($request->has('search')){
            $data = Pengacara::where('kategori', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Pengacara::paginate(5);
        }

        return view('pengacaras.pengacara' ,compact('data'));
    }

    public function tambahpengacara(){
        $kategori = Kategori::all();
        return view('pengacaras.tambahpengacara', compact('kategori'));
    }

    public function insertpengacara(Request $request){
        $data = Pengacara::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pengacara')->with('success', 'Data Pengacara Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Pengacara::find($id);
        return view('pengacaras.tampildata', compact('data'));
    }
    public function detail($id){
        $data = Pengacara::find($id);
        return view('pengacaras.detail', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pengacara::find($id);
        $data ->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pengacara')->with('success', 'Data Pengacara Berhasil Di Update');
    }

    public function delete($id){
        $data = Pengacara::find($id);
        $data->delete();
        return redirect()->route('pengacara')->with('success', 'Data Pengacara Berhasil Di Hapus');
    }
}

