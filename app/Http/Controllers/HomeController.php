<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category :: all( ) -> sortBy('major_category_name');
        $major_category_names = Category :: pluck('major_category_name')-> unique( );       
         return view('home' , compact('major_category_names' , 'categories'));
    }
}
