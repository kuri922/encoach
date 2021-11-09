<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'name' , 'email' , 'body'
    ];
}
