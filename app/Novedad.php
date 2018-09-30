<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    /**
     */

    protected $table = 'novedades';

    public function agentes()
    {
        return $this->belongsToMany('App\Agente', 'novedades_agentes', 'id_novedad', 'id_agente');
    }

    public function operaciones()
    {
        return $this->belongsToMany('App\Operacion', 'novedades_operaciones', 'id_novedad', 'id_operacion');
    }
}
