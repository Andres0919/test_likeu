<?php

namespace App\Http\Controllers;

use App\Operacion;
use App\Novedad;

use Illuminate\Http\Request;

class OperacionController extends Controller
{
    //
    public function index(){

        return view('operacion/list',
        [
            'operaciones' => Operacion::all()
        ]
        );
    }

    public function createNovedad($id){

        return view('operacion/create-novedad',
        [
            'id' => $id
        ]);
    }

    public function show($id){

        $operacion = Operacion::find($id);
        return view('operacion/show-detail',
            [
                'operacion' => $operacion
            ]
        );
    }

    public function saveNovedad(Request $request){
        $id = $request->input('id');
        $operacion = Operacion::find($id);
        $novedad = new Novedad;
        $novedad->nombre = $request->input('nombre');
        $novedad->categoria = $request->input('categoria');
        $novedad->fecha_inicio = $request->input('fecha_inicio');
        $novedad->fecha_fin = $request->input('fecha_fin');

        $diferencia = strtotime($novedad->fecha_fin) - strtotime($novedad->fecha_inicio);
        $novedad->duracion = date('H:i:s',$diferencia);
        $novedad->descripcion = $request->input('descripcion');
        // $novedad->save();

        $operacion->novedades()->save($novedad);
        return redirect()->action('OperacionController@index');
    }
}
