<?php

namespace App\Http\Controllers;
use App\Models\Kontrak;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    //
    public function kontrak(Request $request){
        if($request->has('search')){
            $data = Kontrak::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Kontrak::paginate(5);
        }

        return view('kontraks.kontrak' ,compact('data'));
    }

    public function tambahkontrak(){
        $data = Kontrak::all();
        return view('kontraks.tambahkontrak', compact('data'));
    }

    public function insertkontrak(Request $request){
        $data = Kontrak::create($request->all());
        // if($request->hasFile('foto'))
        // {
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
            // $data->save();
        // }
        $data->save();
        return redirect()->route('kontrak')->with('success', 'Data Kontrak Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Kontrak::find($id);
        return view('kontraks.tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Kontrak::find($id);
        $data ->update($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('kontrak')->with('success', 'Data Kontrak Berhasil Di Update');
    }

    public function delete($id){
        $data = Kontrak::find($id);
        $data->delete();
        return redirect()->route('kontrak')->with('success', 'Data Kontrak Berhasil Di Hapus');
    }
}

