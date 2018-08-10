<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;
use FloristeriaColors\Product;

class Color extends Model
{
    protected $fillable = [
        'nombre'
    ];

     public function products(){
        return $this->belongsToMany('FloristeriaColors\Product','product_colors');
    }

    public function products_with_prices() {
        return Product::rightJoin('prices','products.id','prices.product_id')->join('product_colors','products.id','product_colors.product_id')
            ->select('products.*')->where('color_id', $this->id)->groupBy('products.id')->get();
    }

}
