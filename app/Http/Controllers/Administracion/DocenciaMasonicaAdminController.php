<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TrabajosMasonicos;
use App\Models\RevistasMasonicas;
use App\Models\LibrosMasonicos;
use App\Models\VideosMasonicos;
use App\Models\DetalleVideosMasonicos;
use App\Models\ConferenciasMasonicas;
use App\Models\DetalleConferenciasMasonicas;

class DocenciaMasonicaAdminController extends Controller
{
    public function trabajosMasonicos()
    {
        $trabajos_masonicos = TrabajosMasonicos::find(1);
        return view('administracion.docencia_masonica.trabajos_masonicos')->with(compact('trabajos_masonicos'));
    }

    public function actualizarTrabajosMasonicos(Request $request)
    {
        $trabajosMasonicos = TrabajosMasonicos::find(1);
        $trabajosMasonicos->descripcion = $request->descripcion;
        $trabajosMasonicos->link = $request->link;
        $trabajosMasonicos->save();
        return redirect()->route('administracion.trabajos_masonicos')->with('success', 'Actualizada correctamente');
    }


    public function revistasMasonicas()
    {
        $revistas_masonicas = RevistasMasonicas::find(1);
        return view('administracion.docencia_masonica.revistas_masonicas')->with(compact('revistas_masonicas'));
    }

    public function actualizarRevistasMasonicas(Request $request)
    {
        $revistasMasonicas = RevistasMasonicas::find(1);
        $revistasMasonicas->descripcion = $request->descripcion;
        $revistasMasonicas->link = $request->link;
        $revistasMasonicas->save();
        return redirect()->route('administracion.revistas_masonicas')->with('success', 'Actualizada correctamente');
    }

    public function librosMasonicos()
    {
        $libros_masonicos = LibrosMasonicos::find(1);
        return view('administracion.docencia_masonica.libros_masonicos')->with(compact('libros_masonicos'));
    }

    public function actualizarLibrosMasonicos(Request $request)
    {
        $libros_masonicos = LibrosMasonicos::find(1);
        $libros_masonicos->descripcion = $request->descripcion;
        $libros_masonicos->link = $request->link;
        $libros_masonicos->save();
        return redirect()->route('administracion.libros_masonicos')->with('success', 'Actualizada correctamente');
    }

    

    public function videosMasonicos()
    {
        $videos_masonicos = VideosMasonicos::find(1);
        $detalle_videos_masonicos = DetalleVideosMasonicos::where('id_videos_masonicos', $videos_masonicos->id)->where('activo', 1)->orderBy('id', 'ASC')->get();
        return view('administracion.docencia_masonica.videos_masonicos')->with(compact('videos_masonicos','detalle_videos_masonicos'));
    }

    public function actualizarVideosMasonicos(Request $request)
    {
        $videos_masonicos = VideosMasonicos::find(1);
        $videos_masonicos->descripcion = $request->descripcion;
        $videos_masonicos->save();
        return redirect()->route('administracion.videos_masonicos')->with('success', 'Actualizada correctamente');
    }

    public function storeLinksVideosMasonicos(Request $request)
    {

        $request->validate([
            'link' => 'required',
            'detalle' => 'required'
        ]);
        $videos_masonicos = VideosMasonicos::find(1);
        $link = new DetalleVideosMasonicos();
        $link->detalle = $request->detalle;
        $link->link = $request->link;
        $link->id_videos_masonicos = $videos_masonicos->id;
        $link->activo=1;
        $link->tipo=1;
        $link->save();
        return redirect()->route('administracion.videos_masonicos')->with('success', 'Guardado correctamente');
    }


    public function destroyLinksVideosMasonicos($id)
    {
        $link = DetalleVideosMasonicos::find($id);
        $link->activo=0;
        $link->save();
        return redirect()->route('administracion.videos_masonicos')->with('success', 'Eliminado correctamente');
    }


    public function updateLinksVideosMasonicos(Request $request, $id)
    {
        $link = DetalleVideosMasonicos::find($id);
        $link->detalle = $request->detalle;
        $link->link = $request->link;
        $link->save();
        return redirect()->route('administracion.videos_masonicos')->with('success', 'Actualizado correctamente');
    }


    public function conferenciasMasonicas()
    {
        $conferencias_masonicas = ConferenciasMasonicas::find(1);
        $detalle_conferencias_masonicas = DetalleConferenciasMasonicas::where('id_conferencias_masonicas', $conferencias_masonicas->id)->where('activo', 1)->orderBy('id', 'ASC')->get();
        return view('administracion.docencia_masonica.conferencias_masonicas')->with(compact('conferencias_masonicas','detalle_conferencias_masonicas'));
    }

    public function actualizarConferenciasMasonicas(Request $request)
    {
        $conferencias_masonicas = ConferenciasMasonicas::find(1);
        $conferencias_masonicas->descripcion = $request->descripcion;
        $conferencias_masonicas->save();
        return redirect()->route('administracion.conferencias_masonicas')->with('success', 'Actualizada correctamente');
    }

    public function storeLinksConferenciasMasonicas(Request $request)
    {

        $request->validate([
            'link' => 'required',
            'detalle' => 'required'
        ]);
        $conferencias_masonicas = ConferenciasMasonicas::find(1);
        $link = new DetalleConferenciasMasonicas();
        $link->detalle = $request->detalle;
        $link->link = $request->link;
        $link->id_conferencias_masonicas = $conferencias_masonicas->id;
        $link->activo=1;
        $link->tipo=1;
        $link->save();
        return redirect()->route('administracion.conferencias_masonicas')->with('success', 'Guardado correctamente');
    }


    public function destroyLinksConferenciasMasonicas($id)
    {
        $link = DetalleConferenciasMasonicas::find($id);
        $link->activo=0;
        $link->save();
        return redirect()->route('administracion.conferencias_masonicas')->with('success', 'Eliminado correctamente');
    }


    public function updateLinksConferenciasMasonicas(Request $request, $id)
    {
        $link = DetalleConferenciasMasonicas::find($id);
        $link->detalle = $request->detalle;
        $link->link = $request->link;
        $link->save();
        return redirect()->route('administracion.conferencias_masonicas')->with('success', 'Actualizado correctamente');
    }
}
