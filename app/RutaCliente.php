<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RutaCliente extends Model
{
	public function ruta()
    {
        return $this->hasMany('app\Ruta');
    }

    public function cliente()
    {
        return $this->hasMany('app\Cliente');
    }
    protected $table = 'Ruta_Cliente';
    public $timestamps = false;
}
