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
        return $this->belongsToMany('App\Novedad');
    }

    public function operaciones()
    {
        return $this->belongsToMany('App\Operaciones');
    }
}
