<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriUserController extends Controller
{
    //
    public function index(Request $request){


        $kategoris = DB::table('kategoris')
        ->when($request->input('kategori'), function ($query, $kategori) {
            return $query->where('kategori', 'like', '%' . $kategori . '%');
        })
        ->select('id', 'kategori', 'keterangan')
        ->paginate(10);
        return view('user.kategori', compact('kategoris'));
    }
}
