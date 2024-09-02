<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nosotros;
use App\Models\Francmasoneria;
use App\Models\DeclaracionPrincipios;
use App\Models\Templos;
use App\Models\DetalleTemplo;

use App\Models\MasonesIlustres;
use App\Models\DetalleMasonesIlustres;

class InicioAdminController extends Controller
{
    public function nosotros(){
        $nosotros = Nosotros::find(1);
        return view('administracion.inicio.nosotros')->with('nosotros', $nosotros);
    }

    public function subirNosotrosImagen(Request $request){
        //validar imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imagen = $request->file('file');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $imagen->move(public_path('admin_template/img/nosotros'), $nombre);

        $nosotros = Nosotros::find(1);
        $nosotros->images = $nombre;
        $nosotros->save();

        return redirect()->route('administracion.nosotros')->with('success', 'Imagen subida correctamente');
    }

    public function actualizarNosotrosDescripcion(Request $request){
        $nosotros = Nosotros::find(1);
        $nosotros->descripcion = $request->descripcion;
        $nosotros->save();
        return redirect()->route('administracion.nosotros')->with('success', 'Descripción actualizada correctamente');
    }

    public function francmasoneria(){
        $francmasoneria = Francmasoneria::find(1);
        return view('administracion.inicio.francmasoneria')->with('francmasoneria', $francmasoneria);
    }

    public function subirFrancmasoneriaImagen(Request $request){
        //validar imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imagen = $request->file('file');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $imagen->move(public_path('admin_template/img/francmasoneria'), $nombre);

        $francmasoneria = Francmasoneria::find(1);
        $francmasoneria->images = $nombre;
        $francmasoneria->save();

        return redirect()->route('administracion.francmasoneria')->with('success', 'Imagen subida correctamente');
    }

    public function actualizarFrancmasoneriaDescripcion(Request $request){
        $francmasoneria = Francmasoneria::find(1);
        $francmasoneria->descripcion = $request->descripcion;
        $francmasoneria->save();
        return redirect()->route('administracion.francmasoneria')->with('success', 'Descripción actualizada correctamente');
    }

    public function declaracionPrincipios(){
        $declaracion_principios = DeclaracionPrincipios::find(1);
        return view('administracion.inicio.declaracion_principios')->with('declaracion_principios', $declaracion_principios);
    }

    public function subirDeclaracionPrincipiosImagen(Request $request){
        //validar imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imagen = $request->file('file');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $imagen->move(public_path('admin_template/img/declaracion_principios'), $nombre);

        $declaracion_principios = DeclaracionPrincipios::find(1);
        $declaracion_principios->images = $nombre;
        $declaracion_principios->save();

        return redirect()->route('administracion.declaracion_principios')->with('success', 'Imagen subida correctamente');
    }

    public function actualizarDeclaracionPrincipiosDescripcion(Request $request){
        $declaracion_principios = DeclaracionPrincipios::find(1);
        $declaracion_principios->descripcion = $request->descripcion;
        $declaracion_principios->save();
        return redirect()->route('administracion.declaracion_principios')->with('success', 'Descripción actualizada correctamente');
    }

    public function templos(){
        $templos = Templos::find(1);
        $detalle_templo = DetalleTemplo::where('id_templo', $templos->id)->where('activo', 1)->get();
        return view('administracion.inicio.templos')->with(compact('templos', 'detalle_templo'));
    }

    public function subirTemplosImagen(Request $request){
        //validar imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imagen = $request->file('file');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $imagen->move(public_path('admin_template/img/templos'), $nombre);

        $templos = Templos::find(1);
        $detalle_templo = new DetalleTemplo();
        $detalle_templo->archivo = $nombre;
        $detalle_templo->id_templo = $templos->id;
        $detalle_templo->activo=1;
        $detalle_templo->save();

        return redirect()->route('administracion.templos')->with('success', 'Imagen subida correctamente');
    }

    public function actualizarTemplosDescripcion(Request $request){
        $templos = Templos::find(1);
        $templos->descripcion = $request->descripcion;
        $templos->save();
        return redirect()->route('administracion.templos')->with('success', 'Descripción actualizada correctamente');
    }

    public function eliminarTemplosImages(Request $request, $id){
        $detalle_templo = DetalleTemplo::find($id);
        $detalle_templo->activo = 0;
        $detalle_templo->save();
        return redirect()->route('administracion.templos')->with('success', 'Imagen eliminada correctamente');
    }

    public function masonesIlustres(){
        $masones_ilustres = MasonesIlustres::find(1);
        $detalle_masones_ilustres = DetalleMasonesIlustres::where('id_masones_ilustre', $masones_ilustres->id)->where('activo', 1)->get();
        return view('administracion.masones_ilustres.masones_ilustres')->with(compact('masones_ilustres', 'detalle_masones_ilustres'));
    }

    public function subirMasonesIlustresImagen(Request $request){
        //validar imagen
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imagen = $request->file('file');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $imagen->move(public_path('admin_template/img/masones_ilustres'), $nombre);

        $masones_ilustres = MasonesIlustres::find(1);
        $detalle_masones_ilustres = new DetalleMasonesIlustres();
        $detalle_masones_ilustres->archivo = $nombre;
        $detalle_masones_ilustres->id_masones_ilustre = $masones_ilustres->id;
        $detalle_masones_ilustres->activo=1;
        $detalle_masones_ilustres->save();

        return redirect()->route('administracion.masones_ilustres')->with('success', 'Imagen subida correctamente');
    }

    public function actualizarMasonesIlustresDescripcion(Request $request){
        $masones_ilustres = MasonesIlustres::find(1);
        $masones_ilustres->descripcion = $request->descripcion;
        $masones_ilustres->save();
        return redirect()->route('administracion.masones_ilustres')->with('success', 'Descripción actualizada correctamente');
    }

    public function eliminarMasonesIlustresImages(Request $request, $id){
        $detalle_templo = DetalleMasonesIlustres::find($id);
        $detalle_templo->activo = 0;
        $detalle_templo->save();
        return redirect()->route('administracion.masones_ilustres')->with('success', 'Imagen eliminada correctamente');
    }


}
