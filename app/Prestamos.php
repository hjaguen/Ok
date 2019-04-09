<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Prestamos extends Model
{
    public function cobrador()
    {
        return $this->belongsTo('app\Cobradores');
    }

    public function cliente()
    {
        return $this->belongsTo('app\Cliente');
    }

    public function getFullNameAttribute()
{
    $Cliente = Cliente::where('id', '=' ,$this->idcliente)->first();
    return $Cliente->primerNombre." ".$Cliente->segundoNombre." ".$Cliente->primerApellido." ".$Cliente->documento	 ;
}

    public $additional_attributes = ['full_name'];

    protected $table = 'prestamos';
}
