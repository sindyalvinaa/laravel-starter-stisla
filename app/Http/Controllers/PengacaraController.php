<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengacaraController extends Controller
{
    public function pengacara(){
        return view('pengacaras.pengacara');
    }
}
