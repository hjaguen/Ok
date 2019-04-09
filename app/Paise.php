<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paise extends Model
{
	public function moneda()
    {
        return $this->belongsTo('app\Moneda','idmoneda','idpais');
    }

    public function regiones()
    {
        return $this->hasMany('app\Regione','idregion','idpais');
    }

    public function ciudades()
    {
        return $this->hasMany('app\Ciudade','idciudad','idpais');
    }

    protected $table = 'paises';
    protected $primaryKey = 'idpais';
}
