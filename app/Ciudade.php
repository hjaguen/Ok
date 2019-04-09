<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ciudade extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Regione','idregion','idciudad');
    }

    public function pais()
    {
    	return $this->belongsTo('App\Paise','idpais','idciudad');
    }

    protected $table = 'ciudades';
    protected $primaryKey = 'idciudad';
}
