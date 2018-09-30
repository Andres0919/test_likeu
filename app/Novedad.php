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
        return $this->belongsToMany('App\Agente');
    }

    public function operaciones()
    {
        return $this->belongsToMany('App\Agente', 'novedades_operaciones', 'id_operacion', 'id_novedad');
    }
}
