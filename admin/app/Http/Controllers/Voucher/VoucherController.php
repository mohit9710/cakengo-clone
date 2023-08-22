<?php

namespace App\Http\Controllers\Voucher;

use App\Model\Vouchers\Voucher;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Session;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Voucher::orderby('id','DESC')->get();
        return view('Admin.Voucher.index',compact('data'));
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
            'title'      => 'required',
            'label'      => 'required|unique:vouchers',
            'start_date' => 'required',
            'end_date'   => 'required',
            'offer_type' => 'required',
            'value'      => 'required',
            'description'=> 'required',
            'status'     => 'required',
        ]);

        $insert = new Voucher;

        $insert->title        = $request->title;
        $insert->label        = $request->label;
        $insert->start_date   = $request->start_date;
        $insert->end_date     = $request->end_date;
        $insert->offer_type   = $request->offer_type;
        $insert->value        = $request->value;
        $insert->description  = $request->description;
        $insert->status       = $request->status;

        $insert->save();

        Session::flash('success','Insert Successfullty');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        //
    }
}
