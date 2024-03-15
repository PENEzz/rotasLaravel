<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ContatoController extends controller
{
    public function contato(){
        return view('site.contato');
    }
}