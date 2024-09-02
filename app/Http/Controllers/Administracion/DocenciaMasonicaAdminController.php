<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TrabajosMasonicos;
use App\Models\RevistasMasonicas;
use App\Models\LibrosMasonicos;

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
}
