<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
    ];
}
