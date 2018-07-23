<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;


class BestSellerProduct extends Model
{
    protected $fillable = [
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('FloristeriaColors\Product');
    }
}
