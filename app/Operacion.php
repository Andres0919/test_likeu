<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    /**
     */
    protected $table = 'operaciones';

    public function novedades()
    {
        return $this->belongsToMany('App\Novedad', 'novedades_operaciones', 'id_operacion', 'id_novedad');
    }

    public function agentes()
    {
        return $this->belongsToMany('App\Agente', 'agentesxoperaciones', 'id_agente', 'id_operacion');
    }
}
