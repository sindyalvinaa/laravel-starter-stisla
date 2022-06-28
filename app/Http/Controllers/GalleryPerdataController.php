<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryPerdataController extends Controller
{
    //
    public function index(Request $request){


        $perdata = DB::table('pengacaras')
        ->when($request->input('nama_pengacara'), function ($query, $perdata) {
            return $query->where('nama_pengacara', 'like', '%' . $perdata . '%');
        })
        ->where('kategori','Hukum Perdata')
        ->select('id', 'foto','nama_pengacara','kategori', 'profil')
        ->paginate(10);
        return view('user.galleryPerdata', compact('perdata'));

    }
}
