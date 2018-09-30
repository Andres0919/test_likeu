<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    /**
     */
    protected $table = 'agentes';

    public function novedades()
    {
        return $this->belongsToMany('App\Novedad', 'novedades_agentes', 'id_agente', 'id_novedad');
    }

    public function operaciones()
    {
        return $this->belongsToMany('App\Operacion','agentesxoperaciones', 'id_agente', 'id_operacion');
    }
}
