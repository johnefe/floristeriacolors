<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

	protected $fillable = [
        'tamano','precio','product_id'
    ];
    //

    public function product()
    {
        return $this->belongsTo('FloristeriaColors\Product');
    }
}
