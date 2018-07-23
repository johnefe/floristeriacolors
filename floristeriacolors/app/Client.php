<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	protected $fillable = [
        'nombres','apellidos','sexo','direccion','celular','fecha_nacimiento','user_id','identificacion'
    ];
    ////
    public function user()
    {
        return $this->belongsTo('FloristeriaColors\User');
    }

     public function carts()
    {
        return $this->hasMany('FloristeriaColors\Cart');
    }

    public function points()
    {
        return $this->hasMany('FloristeriaColors\Point');
    }
    
}
