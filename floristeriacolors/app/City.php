<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
     protected $fillable = [
        'nombre'
    ];

     public function products(){
        return $this->belongsToMany('FloristeriaColors\Product','product_cities');
    }

    public function products_with_prices() {
        return Product::rightJoin('prices','products.id','prices.product_id')->join('product_cities','products.id','product_cities.product_id')
            ->select('products.*')->where('city_id', $this->id)->groupBy('products.id')->get();
    }
}
