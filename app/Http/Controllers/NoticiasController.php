<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticias(){
        return view('site.noticia');
    }
}