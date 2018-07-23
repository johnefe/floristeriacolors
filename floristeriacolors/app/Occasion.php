<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;
use FloristeriaColors\Product;

class Occasion extends Model
{
    protected $fillable = [
        'ocasion'
    ];

     public function products(){
        return $this->belongsToMany('FloristeriaColors\Product','product_occasions');
    }

    public function products_with_price() {
        return Product::rightJoin('prices','products.id','prices.product_id')->join('product_occasions','products.id','product_occasions.product_id')
            ->select('products.*')->where('occasion_id', $this->id)->groupBy('products.id')->get();
    }
}
