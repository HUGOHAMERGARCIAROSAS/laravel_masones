<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\RedLogias;

use DB;

class EventosAdminController extends Controller
{
    public function eventos(){
        $eventos = DB::select('SELECT id,date_format(fecha, "%d-%m-%Y") fecha,titulo,SUBSTRING(descripcion, 1, 1000) AS descripcion,imagen FROM `eventos` WHERE `activo` = 1 ORDER BY `id` DESC');
        return view('administracion.eventos.index')->with(compact('eventos'));
    }

    public function redLogias(){
        $red_logias = DB::select('SELECT id,date_format(fecha, "%d-%m-%Y") fecha,titulo,SUBSTRING(descripcion, 1, 1000) AS descripcion,imagen FROM `red_logias` WHERE `activo` = 1 ORDER BY `id` DESC');
        return view('administracion.red_logias.index')->with(compact('red_logias'));
    }

    public function createEventos(){
        return view('administracion.eventos.create');
    }

    public function createRedLogias(){
        return view('administracion.red_logias.create');
    }


    public function eventosStore(Request $request){
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fecha' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $file = $request->file('imagen');
        $nombre = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('admin_template/img/eventos'), $nombre);
        $url = $nombre;
        $eventos = new Eventos();
        $eventos->fecha = $request->fecha;
        $eventos->titulo = $request->titulo;
        $eventos->descripcion = $request->descripcion;
        $eventos->imagen = $url;
        $eventos->activo = 1;
        $eventos->save();
        return redirect()->route('administracion.eventos')->with('success', 'Se ha creado el evento exitosamente');
    }

    public function redLogiasStore(Request $request){
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fecha' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $file = $request->file('imagen');
        $nombre = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('admin_template/img/red_logias'), $nombre);
        $url = $nombre;
        $eventos = new RedLogias();
        $eventos->fecha = $request->fecha;
        $eventos->titulo = $request->titulo;
        $eventos->descripcion = $request->descripcion;
        $eventos->imagen = $url;
        $eventos->activo = 1;
        $eventos->save();
        return redirect()->route('administracion.red_logias')->with('success', 'Se ha creado  exitosamente');
    }

    public function editarEventos( $id){
        $evento = DB::select(' SELECT id,date_format(fecha, "%Y-%m-%d") fecha,titulo, descripcion,imagen FROM `eventos` WHERE `id` = ?', [$id]);
        return view('administracion.eventos.editar')->with(compact('evento'));
    }


    public function editarRedLogias( $id){
        $logia = DB::select(' SELECT id,date_format(fecha, "%Y-%m-%d") fecha,titulo, descripcion,imagen FROM `red_logias` WHERE `id` = ?', [$id]);
        return view('administracion.red_logias.editar')->with(compact('logia'));
    }

    public function eventosUpdate(Request $request, $id){
        
        $eventos = Eventos::find($id);
        $eventos->fecha = $request->fecha;
        $eventos->titulo = $request->titulo;
        $eventos->descripcion = $request->descripcion;

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('admin_template/img/eventos'), $nombre);
            $url = $nombre;
            $eventos->imagen = $url;
        }

        
        $eventos->save();
        return redirect()->route('administracion.eventos')->with('success', 'Se ha actualizado el evento exitosamente');
    }


    public function redLogiasUpdate(Request $request, $id){
        
        $eventos = RedLogias::find($id);
        $eventos->fecha = $request->fecha;
        $eventos->titulo = $request->titulo;
        $eventos->descripcion = $request->descripcion;

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('admin_template/img/red_logias'), $nombre);
            $url = $nombre;
            $eventos->imagen = $url;
        }

        
        $eventos->save();
        return redirect()->route('administracion.red_logias')->with('success', 'Se ha actualizado  exitosamente');
    }

    public function eventosDestroy($id){
        $eventos = Eventos::find($id);
        $eventos->activo = 0;
        $eventos->save();
        return redirect()->route('administracion.eventos')->with('success', 'Se ha eliminado el evento exitosamente');
    }

    public function redLogiasDestroy($id){
        $eventos = RedLogias::find($id);
        $eventos->activo = 0;
        $eventos->save();
        return redirect()->route('administracion.red_logias')->with('success', 'Se ha eliminado  exitosamente');
    }
    
}
