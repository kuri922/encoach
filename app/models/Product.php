<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category ( ) {
        return $this -> belongsTo('App\models\category');
    }

    public function reviews( ) {
        return $this -> hasMany('App\models\Review');
    }
}
