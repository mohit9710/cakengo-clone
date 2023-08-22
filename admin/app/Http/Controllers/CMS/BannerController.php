<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\CMS\Banner;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*get all banner*/
        $data  = Banner::all();
        return  view('Admin.CMS.banner', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.cms.add_banner");
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
            'title'               => 'required|max:255',
            'type'                => 'required',
            'short_description'   => 'required',
            'image'               => 'required',
        ]);

        /*insert Image*/
        $image = $request->image;
        $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
        $image->move('img/banner', $image_name);

        /*insert Category*/
        $Category = Banner::create([
            'type'                =>  $request->type,
            'title'               =>  $request->title,
            'short_description'   =>  $request->short_description,
            'image'               =>  $image_name,
        ]);

        Session::flash('success',  $request->title. ' Banner Succesfully Added');
        return back();      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Banner::where('id',$id)->first();
         if ($data->status == 1) {
            $status = 0;
        }
        else
        {
            $status =1; 
        }

        $update = Banner::where('id', $id)->update([
                'status'        => $status,
                'updated_at'    => Carbon::now(),
            ]);

            Session::flash('success', $data->title. ' Banner Updated Succesfully');
            return back(); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'          => 'required|max:255',
            'description'    => 'required',
        ]);

        $title          = $request->title;
        $description    = $request->description;
        $image          = $request->image;

        if (isset($image)){
            $image_name = strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
            $image->move('img/banner', $image_name);

            $update = Banner::where('id', $id)->update([
                'title'                => $title,
                'short_description'    => $description, 
                'image'                => $image_name,
                'updated_at'           => Carbon::now(),
            ]);

            Session::flash('success', $title. ' Banner Updated Succesfully');
            return back(); 
        }

        else{
             $update = Banner::where('id', $id)->update([
                'title'                => $title,
                'short_description'    => $description, 
                'updated_at'           => Carbon::now(),
            ]);

            Session::flash('success', $title. ' Banner Updated Succesfully');
            return back(); 
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
