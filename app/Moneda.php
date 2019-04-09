<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Moneda extends Model
{
	public function paises()
    {
        return $this->hasMany('App\Paise','idpais','idmoneda');
    }

    protected $primaryKey = 'idmoneda';
}
