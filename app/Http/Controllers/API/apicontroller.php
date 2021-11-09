<?php

namespace App\Http\Controllers\API;
use App\models\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class apicontroller extends Controller
{
    public function getcategory(  ) {
        $category = Category :: all( );
        return $category;
    }
}
