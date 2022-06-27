<?php

namespace App\Http\Controllers;
use App\Models\Perkara;
use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    //
    public function perkara(){
        return view('perkaras.perkara');
    }
}
