<?php

namespace App\Http\Controllers;
use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    //
    public function konsultasi(Request $request){
        if($request->has('search')){
            $data = Konsultasi::where('bidang_praktik', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Konsultasi::paginate(5);
        }

        return view('konsultasis.konsultasi' ,compact('data'));
    }

    public function tambahkonsultasi(){
        $data = Konsultasi::all();
        return view('konsultasis.tambahkonsultasi', compact('data'));
    }

    public function insertkonsultasi(Request $request){
        $data = Konsultasi::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('konsultasi')->with('success', 'Data Diri Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Konsultasi::find($id);
        return view('konsultasis.tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Konsultasi::find($id);
        $data ->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('konsultasi')->with('success', 'Data Diri Berhasil Di Update');
    }

    public function delete($id){
        $data = Konsultasi::find($id);
        $data->delete();
        return redirect()->route('konsultasi')->with('success', 'Data Diri Berhasil Di Hapus');
    }
}
