<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class ProductOccasion extends Model
{
    protected $fillable = [
        'product_id','occasion_id'
    ];
}
