<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallerycategory extends Model
{
    public function product_cat(){
        return $this->hasMany('App\Models\Galleryproduct','category');
    }
}
