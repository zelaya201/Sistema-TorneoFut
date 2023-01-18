<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function show(Torneo $torneo) {

       
        return view('home.index', compact('torneo')); 
        //return $torneo;
    }
}
