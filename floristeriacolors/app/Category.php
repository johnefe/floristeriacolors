<?php

namespace FloristeriaColors;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use FloristeriaColors\Product;

class Category extends Model
{
	
    protected $fillable = [
        'name','category_type_id','img'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('FloristeriaColors\Product');
    }

    public function products_with_price() {
        return Product::rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_id', $this->id)->groupBy('products.id')->get();
    }

    public function category_type()
    {
        return $this->belongsTo('FloristeriaColors\CategoryType');
    }

   


}
