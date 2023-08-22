<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Model\Inventory\Product;
use App\Model\Inventory\Stock;
use Illuminate\Http\Request;
use DB;
use Session;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('products')->join('stocks','stocks.product_id','products.id')
                                     ->groupBy('stocks.size')
                                     ->groupBy('products.title')
                                     ->groupBy('stocks.product_id')
                                     ->select('products.title','stocks.product_id','stocks.size',DB::raw('sum(stocks.credit) as credit'),DB::raw('sum(stocks.debit) as debit'))
                                     ->get();

        return view('Admin.Inventory.stocks',compact('data'));
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
            'size'    => 'required',
            'credit'  => 'required',
            'id'      => 'required',
        ]);

        $insert = new Stock;
        $insert->product_id = $request->id;
        $insert->size       = $request->size;
        $insert->credit     = $request->credit;

        $insert->save();

         Session::flash('success','Insert Successfully');
         return back();
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $size = DB::table('productsizes')->where('product_id',$id)->get();
        $data = Stock::where('stocks.product_id',$id)->join('productsizes','productsizes.id','=','stocks.size')
                                         ->select('productsizes.id','productsizes.weight as size','stocks.credit','stocks.debit','stocks.created_at')
                                         ->orderby('id','DESC')
                                         ->get();

        return view('Admin.Inventory.Product.stock',compact('id','size','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
