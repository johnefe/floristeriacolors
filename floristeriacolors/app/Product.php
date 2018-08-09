<?php

namespace FloristeriaColors;



use Illuminate\Database\Eloquent\Model;

//para cambiar de nombre al archivo
use Carbon\Carbon;


class Product extends Model
{
	protected $fillable = [
        'nombre','descripcion','imagen','category_id'
    ];

    //mutador sirve para modificar elementso antes de ser guardados
    public function setImagenAttribute($imagen){


        
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($imagen));
        

    }
	
    
    /**
     * Get the products that owns the commen.
     */
    public function category()
    {
        return $this->belongsTo('FloristeriaColors\Category');
    }
    public function prices()
    {
        return $this->hasMany('FloristeriaColors\Price');
    }

    public function occasions(){
        return $this->belongsToMany('FloristeriaColors\Occasion','product_occasions');
    }
    public function colors(){
        return $this->belongsToMany('FloristeriaColors\Color','product_colors');
    }
    
}
