<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Model\Inventory\Productsize;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use DB;

class ProductsizeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
       request()->validate([
            'id'        => 'required',
            'file_type' => 'required',
            'file'      => 'required'
       ]);

       if ($request->file_type == 2) {
           $image_name = $request->file;
       }
       else{
          foreach ($request->file as $key => $value) {
             $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$value->getClientOriginalName();
             $value->move('img/product', $image_name);
              DB::table('product_file')->insert([
                'product_id'  => $request->id,
                'file_type'   => $request->file_type,
                'files'       => $image_name,
                'created_at'  => Carbon::now(),
             ]);

            }
              Session::flash('success','Data Successfully Insert');
              return back();
       }

       DB::table('product_file')->insert([
            'product_id'  => $request->id,
            'file_type'   => $request->file_type,
            'files'       => $image_name,
            'created_at'  => Carbon::now(),
       ]);

       Session::flash('success','Data Successfully Insert');
       return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        request()->validate([
            'id'         => 'required',
            'attribute'  => 'required',
            'type'       => 'required',
        ]);

        $check = DB::table('product_attribute')->where('product_id',$request->id)
                                               ->where('atribute',$request->attribute)
                                               ->where('type',$request->type)
                                               ->first();

        if ($check) {
            Session::flash('error','Data Already exist');
        }
        else
        {
            DB::table('product_attribute')->insert([
            'product_id'  => $request->id,
            'atribute'    => $request->attribute,
            'type'        => $request->type,
            'created_at'  => Carbon::now(),
           ]);

           Session::flash('success','Data Successfully Insert');
        }
         
       return back();

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
            'id'     => 'required',
           // 'size'   => 'required',
            'weight' => 'required',
            'amount' => 'required|integer',
        ]);

        //$check = Productsize::where('product_id',$request->id)->where('size',$request->size)->first();
        $check = Productsize::where('product_id',$request->id)->where('weight',$request->weight)->first();
        if (!$check) {
            $insert = new Productsize;
            $insert->product_id  = $request->id;
            //$insert->size        = $request->size;
            $insert->weight      = $request->weight;
            $insert->amount      = $request->amount;
            $insert->save();

            Session::flash('success','Insert Successfully');
        }
        else{
            Session::flash('error','Already Exist');
        }

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productsize  $productsize
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('product_attribute')->where('product_id',$id)->get();
        return view('Admin.Inventory.Product.attribute',compact('id','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productsize  $productsize
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $productsizes  = Productsize::where('product_id',$id)->get();
        return view('Admin.Inventory.Product.product_size',compact('id','productsizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productsize  $productsize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'status' => 'required',
            'weight' => 'required',
            'amount' => 'required|integer',
        ]);

            $insert = Productsize::find($id);
            $insert->weight      = $request->weight;
            $insert->amount      = $request->amount;
            $insert->status      = $request->status;
            $insert->save();

         Session::flash('success','Update Successfully');

         return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productsize  $productsize
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product_attribute')->where('id',$id)->delete();

         Session::flash('success','Delete Successfully');

         return back();

    }
}
