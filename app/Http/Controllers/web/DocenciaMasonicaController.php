<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocenciaMasonicaController extends Controller
{
    public function trabajosMasonicos()
    { 
        return view('web.docencia_masonica.trabajos_masonicos');
    }

    public function librosMasonicos()
    { 
        return view('web.docencia_masonica.libros_masonicos');
    }

    public function revistasMasonicas()
    { 
        return view('web.docencia_masonica.revistas_masonicas');
    }

    public function conferenciasMasonicas()
    { 
        return view('web.docencia_masonica.conferencias_masonicas');
    }

    public function videosMasonicos()
    { 
        return view('web.docencia_masonica.videos_masonicos');
    }

    public function redLogias()
    { 
        return view('web.red_logias');
    }

    public function eventos()
    { 
        return view('web.eventos');
    }

    public function contactanos(){

        return view('web.contactanos');
    }

}
