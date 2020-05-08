<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function subcategories(){
        return $this->hasMany('App\Subcategorie');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
