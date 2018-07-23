<?php

namespace FloristeriaColors;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    public function categories()
    {
        return $this->hasMany('FloristeriaColors\Category');
    }
}
