<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
	public function genero()
    {
        return $this->belongsTo('app\Genero');
    }

    public function civil()
    {
        return $this->belongsTo('app\Civil');
    }

    public function pais()
    {
        return $this->belongsTo('app\Paise','id','idpais');
    }

    public function region()
    {
        return $this->belongsTo('app\Regione','id','idregion');
    }

    public function ciudad()
    {
        return $this->belongsTo('app\Ciudade','id','idciudad');
    }

    public function referido()
    {
        return $this->belongsTo('app\Cliente','id','referido');
    }

    public function getFullNameAttribute()
{
    return "{$this->primerNombre} {$this->segundoNombre} {$this->primerApellido} {$this->documento} {Tel: $this->telefonoMovil}";
}

    public function ruta()
    {
        return $this->belongto('app\RutaCliente');
    }

    public $additional_attributes = ['full_name'];

    protected $table = 'clientes';
}
