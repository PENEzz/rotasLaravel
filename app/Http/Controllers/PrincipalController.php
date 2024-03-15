<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }
}
