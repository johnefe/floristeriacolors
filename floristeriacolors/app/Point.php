<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'client_id','cart_id','puntos'
    ];

    public function client()
    {
        return $this->belongsTo('FloristeriaColors\Client');
    }

    public function cart()
    {
        return $this->belongsTo('FloristeriaColors\Cart');
    }
}
