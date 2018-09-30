<?php

namespace App\Http\Controllers;

use App\Agente;

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
}
