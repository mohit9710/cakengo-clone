<?php

namespace App\Http\Controllers\Pincode;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\Pincode\Pincode;
use App\Model\Category\Category;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;
use Validator;

class PincodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*get categories*/
        $pincodes  = Pincode::all();
        return  view('Admin.Pincode.pincode', compact('pincodes'));
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

        $request->validate([
            'pincode'              => 'required|unique:pincode|digits:6|numeric',
            'delivery_time'        => 'required',
            'max_delivery_charge'  => 'required',
            'delivery_charge'      => 'required',

        ]);

            /*insert Category*/
            $Category = Pincode::create([
                'pincode'      =>  $request->pincode,
                'delivery_time'=>  $request->delivery_time,
                'max_delivery_charge' => $request->max_delivery_charge,
                'delivery_charge'     => $request->delivery_charge,
            ]);

            Session::flash('success', $request->pincode. ' Pincode Succesfully Added');
            return back();       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->pincode);
        $request->validate([
            'pincode'          => 'required|digits:6|numeric|unique:pincode,pincode,'.$id,
        ]);

        $update = Pincode::where('id', $id)->update([
                    'pincode'          => $request->pincode,
                    'delivery_time'=>  $request->delivery_time,
                    'max_delivery_charge' => $request->max_delivery_charge,
                    'updated_at'     => Carbon::now(),
                ]);
        Session::flash('success', $request->pincode. ' Pincode Updated Succesfully');
        return back();  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $deletePin = Pincode::find($id);
        $deletePin->delete();
        Session::flash('success',  ' Pincode Deleted Succesfully');
        return back();
    }
}
