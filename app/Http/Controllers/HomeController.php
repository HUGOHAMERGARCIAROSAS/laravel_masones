<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\LibrosMasonicos;
use App\Models\RevistasMasonicas;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->where('activo', 1)->orderBy('id', 'ASC')->get();
        $libros = LibrosMasonicos::find(1);
        $revistas = RevistasMasonicas::find(1);
        return view('welcome')->with(compact('sliders', 'libros','revistas'));
    }
}
