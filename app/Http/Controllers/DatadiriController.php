<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use Illuminate\Http\Request;

class DatadiriController extends Controller
{
    public function datadiri(Request $request){
        if($request->has('search')){
            $data = Datadiri::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Datadiri::paginate(5);
        }

        return view('datadiris.datadiri' ,compact('data'));
    }

    public function tambahdatadiri(){
        $data = Datadiri::all();
        return view('datadiris.tambahdatadiri', compact('data'));
    }

    public function insertdatadiri(Request $request){
        $data = Datadiri::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datadiri')->with('success', 'Data Diri Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Datadiri::find($id);
        return view('datadiris.tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Datadiri::find($id);
        $data ->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datadiri')->with('success', 'Data Diri Berhasil Di Update');
    }

    public function delete($id){
        $data = Datadiri::find($id);
        $data->delete();
        return redirect()->route('datadiri')->with('success', 'Data Diri Berhasil Di Hapus');
    }
}

