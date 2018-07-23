<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'cantidad','product_id','tamano','precio','cart_id'
    ];

    public function product()
    {
        return $this->belongsTo('FloristeriaColors\Product');
    }

    public function client()
    {
        return $this->belongsTo('FloristeriaColors\Cart');
    }
}
