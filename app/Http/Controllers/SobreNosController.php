<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        return view('site.sobre-nos');
    }
}