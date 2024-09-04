<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sliders;

use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('administracion.dashboard');
    }

    public function sliders()
    {
        $sliders = Sliders::where('activo', 1)->orderBy('id', 'ASC')->get();
        return view('administracion.sliders.index')->with(compact('sliders'));
    }

    public function createSliders(){
        return view('administracion.sliders.create');
    }


    public function slidersStore(Request $request){
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $file = $request->file('imagen');
        $nombre = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('admin_template/img/sliders'), $nombre);
        $url = $nombre;
        $slider = new Sliders();
        $slider->imagen = $url;
        $slider->activo = 1;
        $slider->save();
        return redirect()->route('administracion.sliders')->with('success', 'Se ha creado el slider exitosamente');
    }

    public function editarSliders( $id){
        $slider = DB::select('SELECT id,imagen FROM `sliders` WHERE `id` = ?', [$id]);
        return view('administracion.sliders.editar')->with(compact('slider'));
    }

    public function slidersUpdate(Request $request, $id){
        
        $slider = Sliders::find($id);

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombre = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('admin_template/img/sliders'), $nombre);
            $url = $nombre;
            $slider->imagen = $url;
        }
        $slider->save();

        return redirect()->route('administracion.sliders')->with('success', 'Se ha actualizado el slider exitosamente');
    }

    public function slidersDestroy($id){
        $sliders = Sliders::find($id);
        $sliders->activo = 0;
        $sliders->save();
        return redirect()->route('administracion.sliders')->with('success', 'Se ha eliminado el sliders exitosamente');
    }
}
