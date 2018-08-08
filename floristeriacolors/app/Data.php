<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	 protected $table = 'datas';
    protected $fillable = [
        'email','ciudad','nombre','direccion','telefono','celular','facebook','youtube','pinterest','instagram'
    ];
}
