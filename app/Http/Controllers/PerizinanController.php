<?php

namespace App\Http\Controllers;
use App\Models\Perizinan;
use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    //
    public function perizinan(Request $request){
        if($request->has('search')){
            $data = Perizinan::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $data = Perizinan::paginate(5);
        }

        return view('perizinans.perizinan' ,compact('data'));
    }

    public function tambahperizinan(){
        $data = Perizinan::all();
        return view('perizinans.tambahperizinan', compact('data'));
    }

    public function insertperizinan(Request $request){
        $data = Perizinan::create($request->all());
        // if($request->hasFile('foto'))
        // {
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('perizinan')->with('success', 'Data perizinan Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        $data = Perizinan::find($id);
        return view('perizinans.tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Perizinan::find($id);
        $data ->update($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('assets/img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('perizinan')->with('success', 'Data perizinan Berhasil Di Update');
    }

    public function delete($id){
        $data = Perizinan::find($id);
        $data->delete();
        return redirect()->route('perizinan')->with('success', 'Data perizinan Berhasil Di Hapus');
    }
}
