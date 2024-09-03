<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TrabajosMasonicos;
use App\Models\RevistasMasonicas;
use App\Models\LibrosMasonicos;
use App\Models\VideosMasonicos;
use App\Models\DetalleVideosMasonicos;
use App\Models\ConferenciasMasonicas;
use App\Models\DetalleConferenciasMasonicas;

use DB;

class DocenciaMasonicaController extends Controller
{
    public function trabajosMasonicos()
    { 
        $trabajos_masonicos = TrabajosMasonicos::find(1);
        return view('web.docencia_masonica.trabajos_masonicos')->with(compact('trabajos_masonicos'));
    }

    public function librosMasonicos()
    { 
        $libros_masonicos = LibrosMasonicos::find(1);
        return view('web.docencia_masonica.libros_masonicos')->with(compact('libros_masonicos'));
    }

    public function revistasMasonicas()
    { 
        $revistas_masonicas = RevistasMasonicas::find(1);
        return view('web.docencia_masonica.revistas_masonicas')->with(compact('revistas_masonicas'));
    }

    public function conferenciasMasonicas()
    { 
        $conferencias_masonicas = ConferenciasMasonicas::find(1);
        $detalle_conferencias_masonicas = DB::select("SELECT id,SUBSTRING_INDEX(link, 'https://youtu.be/', -1) as video_id
          FROM `detalle_conferencias_masonicas` WHERE `id_conferencias_masonicas` = $conferencias_masonicas->id AND `activo` = 1 ORDER BY `id` ASC");
        return view('web.docencia_masonica.conferencias_masonicas', compact('conferencias_masonicas','detalle_conferencias_masonicas'));
    }

    public function videosMasonicos()
    { 
        $videos_masonicos = VideosMasonicos::find(1);
        $detalle_videos_masonicos = DB::select("SELECT id,SUBSTRING_INDEX(link, 'https://youtu.be/', -1) as video_id
          FROM `detalle_videos_masonicos` WHERE `id_videos_masonicos` = $videos_masonicos->id AND `activo` = 1 ORDER BY `id` ASC");
        //   dd($detalle_videos_masonicos);
        return view('web.docencia_masonica.videos_masonicos')->with(compact('videos_masonicos','detalle_videos_masonicos'));
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
