<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Agente;
use App\Operacion;

use Illuminate\Http\Request;

class AgenteController extends Controller
{
    //
    public function index(){

        return view('agente/list',
            [
                'agentes' => Agente::all()
            ]
        );
    }

    public function createNovedad($id){
        return view('agente/create-novedad',
            [
                'id' => $id
            ]
        );
    }

    public function show($id){

        return view('agente/show-detail',
            [
                'agente' => Agente::find($id)
            ]
        );
    }

    public function saveNovedad(Request $request){
        $id = $request->input('id');
        $agente = Agente::find($id);
        $novedad = new Novedad;
        $novedad->nombre = $request->input('nombre');
        $novedad->categoria = $request->input('categoria');
        $novedad->fecha_inicio = $request->input('fecha_inicio');
        $novedad->fecha_fin = $request->input('fecha_fin');

        $diferencia = strtotime($novedad->fecha_fin) - strtotime($novedad->fecha_inicio);
        $novedad->duracion = date('H:i:s',$diferencia);
        $novedad->descripcion = $request->input('descripcion');
        // $novedad->save();

        $agente->novedades()->save($novedad);
        return redirect()->action('AgenteController@index');
    }
}
