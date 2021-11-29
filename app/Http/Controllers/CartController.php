<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart :: instance(Auth :: user( ) ->id) -> content( );

        $cart = Cart::instance(Auth::user()->id)->content();

        $total = 0;

        foreach ($cart as $c) {
            $total += $c->qty * $c->price;
        }

        return view('carts.index', compact('cart', 'total'));


        // foreach ($cart as $c) {
        //     $total = $c -> price;

        //     return view('carts.index', compact('cart', 'total'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::instance(Auth::user()->id)->add(
             [
                'id' => $request->id, 
                'name' => $request->name, 
                'qty' => '1',
                'price' => $request->price, 
                'weight' =>1,
            ] 
            );

    return redirect( ) -> route('products.show' , $request -> get('id'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = DB :: table('shoppingcart') -> where('instance' , Auth :: uesr( ) -> id) -> where('indetifier' , $count) -> get( );

        return view('carts.show' , compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request -> input('delete')) {
            Cart :: instance(Auth :: user( ) ->id) ->remove($request -> input('id'));
        } else {
            Cart :: instance(Auth :: user( ) -> id) -> update($request) ->input('id') ;
        }

        return redirect ( ) -> route('carts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $require)
    {
        // $user_shoppingcarts = DB::table('shoppingcart')->where('instance', Auth::user()->id)->get();

        // $count = $user_shoppingcarts->count();

        // $count += 1;
        // Cart::instance(Auth::user()->id)->store($count);

        // DB::table('shoppingcart')->where('instance', Auth::user()->id)->where('number', null)->update(['number' => $count, 'buy_flag' => true]);

        // Cart::instance(Auth::user()->id)->destroy();

        // return redirect()->route('carts.index');


        $user_shoppingcarts = DB::table('shoppingcart')->get();
       $number = DB::table('shoppingcart')->where('instance', Auth::user()->id)->count();

       $count = $user_shoppingcarts->count();

       $count += 1;
       $number += 1;
       $cart = Cart::instance(Auth::user()->id)->content();

       $price_total = 0;
       $qty_total = 0;

       foreach ($cart as $c) {
           if ($c->options->carriage) {
               $price_total += ($c->qty * ($c->price + 800));
           } else {
               $price_total += $c->qty * $c->price;
           }
           $qty_total += $c->qty;
       }

       Cart::instance(Auth::user()->id)->store($count);

       DB::table('shoppingcart')->where('instance', Auth::user()->id)
            ->where('number', null)
             ->update(
         [
            'code' => substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 10),
             'number' => $number, 
             'price_total' => $price_total,
            'qty' => $qty_total,
            'buy_flag' => true, 
            'updated_at' => date("Y/m/d H:i:s")
                                    ]
                                );

       Cart::instance(Auth::user()->id)->destroy();

       return redirect()->route('home');
    }
    
}
