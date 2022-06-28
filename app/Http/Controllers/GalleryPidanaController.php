<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryPidanaController extends Controller
{
    //


    public function index(Request $request){


        $pidana = DB::table('pengacaras')
        ->when($request->input('nama_pengacara'), function ($query, $pidana) {
            return $query->where('nama_pengacara', 'like', '%' . $pidana . '%');
        })
        ->where('kategori','Hukum Pidana')
        ->select('id', 'foto','nama_pengacara','kategori', 'profil')
        ->paginate(10);
        return view('user.galleryPidana', compact('pidana'));

    }
}
