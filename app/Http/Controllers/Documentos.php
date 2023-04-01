<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Documentos extends Controller
{
    public function documentos(){
        return view('site.pages.casadosdocumentos.index');
    }
}
