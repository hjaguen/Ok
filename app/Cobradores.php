<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cobradores extends Model
{
	public function genero()
    {
        return $this->belongsTo('app\Genero');
    }

    public function civil()
    {
        return $this->belongsTo('app\Civil');
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }

    public function getFullNameAttribute()
{
    return "{$this->primerNombre} {$this->segundoNombre} {$this->primerApellido} {tel: $this->telefonoMovil}";
}

    public $additional_attributes = ['full_name'];
    
    protected $table = 'cobradores';
}
