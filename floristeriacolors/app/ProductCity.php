<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class ProductCity extends Model
{
     protected $fillable = [
        'product_id','city_id'
    ];
}
