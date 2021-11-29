<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use App\models\Product;

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
    public function index(Request $request)
    {

         $products = Product :: paginate(6);
         $categories = Category :: all( ) -> sortBy('major_category_name');
         $major_category_names = Category :: pluck('major_category_name')-> unique( );       
        
         $recommend_products = Product :: where('recommend_flag' , true)->take(12)-> get( );;
         return view('home', compact('major_category_names', 'categories', 'recommend_products'));
    }
}
