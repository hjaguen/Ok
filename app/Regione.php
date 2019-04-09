<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Regione extends Model
{
    public function pais()
    {
        return $this->belongsTo('app\Paise','idpais','idregion');
    }

    public function ciudades()
    {
        return $this->hasMany('app\Ciudade','idciudad','idregion');
    }

    protected $table = 'regiones';
    protected $primaryKey = 'idregion';
}
