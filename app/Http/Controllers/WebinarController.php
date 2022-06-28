<?php

namespace App\Http\Controllers;
use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //
    public function webinar(){
        return view('webinars.webinar');
    }
}
