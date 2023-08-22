<?php

namespace App\Http\Controllers\Website;

use App\Model\order\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Cart::join('products','products.id','carts.product_id')
                      ->where('carts.user_id',Auth::user()->id)
                      ->select('carts.*','products.*','carts.id as cart_id')
                      ->get();

        return view('website.cart',compact('data'));
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
        request()->validate([
            'color'  => 'nullable',
            'size'   => 'required',
            'qty'    => 'required',
            'price'  => 'required',
        ]);

        $insert = new Cart;
        $insert->color      = $request->color;
        $insert->size       = $request->size;
        $insert->qty        = $request->qty;
        $insert->price      = $request->price;
        $insert->product_id = $request->product_id;
        $insert->user_id    = Auth::user()->id;

        $insert->save();

        Session::flash('success','Cart Successfully Added');

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        $delete = Cart::where('id',$cart->id)->delete();

        Session::flash('success','Successfully Delete');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
