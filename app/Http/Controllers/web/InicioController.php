<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Nosotros;
use App\Models\Francmasoneria;
use App\Models\DeclaracionPrincipios;

use App\Models\Templos;
use App\Models\DetalleTemplo;

use App\Models\MasonesIlustres;
use App\Models\DetalleMasonesIlustres;

class InicioController extends Controller
{
    public function nosotros()
    {
        $nosotros = Nosotros::first();  
        return view('web.inicio.nosotros')->with('nosotros', $nosotros);
    }

    public function sanchez_carrion(){
        return view('web.sanchez_carrion');
    }

    public function francmasoneria()
    {
        $francmasoneria = Francmasoneria::first();
        return view('web.inicio.francmasoneria')->with('francmasoneria', $francmasoneria);
    }

    public function declaracion_principios()
    {
        $declaracion_principios = DeclaracionPrincipios::first();
        return view('web.inicio.declaracion_principios')->with('declaracion_principios', $declaracion_principios);
    }

    public function templos()
    {
        $templos = Templos::find(1);
        $detalle_templo = DetalleTemplo::where('id_templo', $templos->id)->where('activo', 1)->orderBy('id', 'ASC')->get();
        return view('web.inicio.templos')->with(compact('templos', 'detalle_templo'));
    }

    public function docenciaMasonica()
    {
        $templos = Templos::find(1);
        $detalle_templo = DetalleTemplo::where('id_templo', $templos->id)->where('activo', 1)->orderBy('id', 'ASC')->get();
        return view('web.inicio.templos')->with(compact('templos', 'detalle_templo'));
    }

    public function masonesIlustres(){
        $masones_ilustres = MasonesIlustres::find(1);
        $detalle_masones_ilustres = DetalleMasonesIlustres::where('id_masones_ilustre', $masones_ilustres->id)->where('activo', 1)->orderBy('id', 'ASC')->paginate(4);
        $todas_imagenes = DetalleMasonesIlustres::where('id_masones_ilustre', $masones_ilustres->id)->where('activo', 1)->orderBy('id', 'ASC')->get();
        
        
        return view('web.masones_ilustres')->with(compact('masones_ilustres', 'detalle_masones_ilustres', 'todas_imagenes'));
    }

  

}
