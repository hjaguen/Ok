<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mensaje extends Model
{

	public function remitente()
    {
        return $this->belongsTo('app\User');
    }

    public function receptor()
    {
        return $this->belongsTo('app\User');
    }

    protected $table = 'Mensajes';
}
