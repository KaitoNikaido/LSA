<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sound;

class HomeController extends Controller
{
    public function index(Sound $sound)
    {
        return view('home/index')->with(['sounds'=>$sound->get()]);
    }
}
