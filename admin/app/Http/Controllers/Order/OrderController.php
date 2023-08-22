<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
            'checkout_id'  => 'required',
            'status'       => 'required',
        ]);

        DB::table('checkout')->where('id',$request->checkout_id)->update(['status'=>$request->status]);

        Session::flash('success','Status Change Successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('checkout')->join('users','users.id','checkout.auth_id')
                                     ->where('checkout.status',$id)
                                     ->select(
                                        'checkout.*',
                                        'users.name',
                                        'users.email'
                                    )
                                     ->paginate(10);

        return view('orders.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('checkout')->leftjoin('users','users.id','checkout.auth_id')
                                     ->where('checkout.id',$id)
                                     ->select(
                                        'checkout.*',
                                        'users.name',
                                        'users.email',
                                        'checkout.address',
                                        'checkout.pincode',
                                        'users.mobile as phone'
                                    )
                                     ->first();

        $cart = DB::table('checkout_carts')->where('checkout_id',$id)
                                          ->get();

        return view('orders.bill',compact('data','cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
