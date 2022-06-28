<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function buku(Request $request){
        if($request->has('search')){
            $data = Buku::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Buku::paginate(5);
        }

        return view('bukus.buku' ,compact('data'));
    }

    public function tambahbuku(){
        $data = Buku::all();
        return view('bukus.tambahbuku', compact('data'));
    }

    public function insertbuku(Request $request){
        $data = Buku::create($request->all());
        // if($request->hasFile('foto'))
        // {
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Buku::find($id);
        return view('bukus.tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Buku::find($id);
        $data ->update($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Update');
    }

    public function delete($id){
        $data = Buku::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Hapus');
    }
}
