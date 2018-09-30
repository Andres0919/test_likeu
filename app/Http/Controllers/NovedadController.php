<?php

namespace App\Http\Controllers;
use App\Novedad;
use App\Operacion;
use Illuminate\Http\Request;

class NovedadController extends Controller
{
    //
    public function index(){

        return view('novedad/list',
            [
                'novedades' => Novedad::all()
            ]
        );
    }

    public function show($id){
        return 'novedad '.$id;
    }

    public function create(){
        return view('novedad/create');
    }

    public function save(Request $request){

        $operacion = Operacion::find(1);
        $novedad = new Novedad;
        $novedad->nombre = $request->input('nombre');
        $novedad->categoria = $request->input('categoria');
        $novedad->fecha_inicio = $request->input('fecha_inicio');
        $novedad->fecha_fin = $request->input('fecha_fin');

        $diferencia = strtotime($novedad->fecha_fin) - strtotime($novedad->fecha_inicio);
        $novedad->duracion = date('H:i:s',$diferencia);
        $novedad->descripcion = $request->input('descripcion');
        // $novedad->save();
        $operacion->novedad()->save($novedad);

        return redirect()->action('NovedadController@index');
    }
}
