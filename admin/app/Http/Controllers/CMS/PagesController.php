<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\CMS\Pages;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*get all Pages*/
        $data  = Pages::all();
        return  view('Admin.CMS.pages', compact('data'));
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
            'title'               => 'required',
            'metatitle'           => 'required',
            'keyword'             => 'required',
            'description'         => 'required',
            'address'             => 'required',
            'email'               => 'required',
            'mobile'              => 'required',
            'image'               => 'required',
        ]);

// dd($request->all());
        /*insert Image*/
        $image = $request->image;
        $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
        $image->move('img/pages', $image_name);

        /*insert Category*/
        $Category = Pages::create([
            'title'               =>  $request->title,
            'meta_title'          =>  $request->metatitle,
            'keyword'             =>  $request->keyword,
            'description'         =>  $request->description,
            'address'             =>  $request->address,
            'email'               =>  $request->email,
            'mobile'              =>  $request->mobile,
            'image'               =>  $image_name,
        ]);

        Session::flash('success',  $request->title. ' Pages Succesfully Added');
        return back();      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = Pages::where('id',$id)->first();
         if ($data->status == 1) {
            $status = 0;
        }
        else
        {
            $status =1; 
        }

        $update = Pages::where('id', $id)->update([
                'status'        => $status,
                'updated_at'    => Carbon::now(),
            ]);

            Session::flash('success', $data->title. ' Pages Updated Succesfully');
            return back(); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $request->validate([
            'title'               => 'required',
            'metatitle'           => 'required',
            'keyword'             => 'required',
            'description'         => 'required',
            'address'             => 'required',
            'email'               => 'required',
            'mobile'              => 'required',
            'image'               => 'required',
        ]);

        $title          = $request->title;
        $description    = $request->description;
        $image          = $request->image;

        if (isset($image)){
            $image_name = strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
            $image->move('img/pages', $image_name);

            $update = Pages::where('id', $id)->update([
                'title'       => $title,
                'meta_title'  => $request->metatitle,
                'keyword'     => $request->keyword,
                'description' => $description, 
                'image'       => $image_name,
                'address'     =>  $request->address,
                'email'       =>  $request->email,
                'mobile'      =>  $request->mobile,
                'updated_at'  => Carbon::now(),
            ]);

            Session::flash('success', $title. ' Pages Updated Succesfully');
            return back(); 
        }

        else{
             $update = Pages::where('id', $id)->update([
                'title'       => $title,
                'description' => $description, 
                'address'     =>  $request->address,
                'email'       =>  $request->email,
                'mobile'      =>  $request->mobile,
                'updated_at'  => Carbon::now(),
            ]);

            Session::flash('success', $title. ' Pages Updated Succesfully');
            return back(); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        //
    }

    public function home_images()
    {
    $images = DB::table('home')->get();
      return view('Admin.CMS.homeimages',compact('images'));
    }

    public function images_edit(request $request)
    {

         if ($request->image == '') 
         {
              $data = DB::table('home')->where('id',$request->id)->first();

              $update = DB::table('home')->where('id',$request->id)->update([
               'images'               => $data->images,
               'description'          => $request->description,
               'offer'                => $request->offer,
               'updated_at'           => Carbon::now(),
                ]);

              Session::flash('success',$data->images. ' Image Updated Succesfully');
              return back();
         }
         else
         {
             $image_name = strtotime(date('Y-m-d H:i:s')).'_'.$request->image->getClientOriginalName();
              $request->image->move('img/home', $image_name);

              $update = DB::table('home')->where('id',$request->id)->update([
               'images'               => $image_name,
               'description'          => $request->description,
               'offer'                => $request->offer,
               'updated_at'           => Carbon::now(),
                ]);

              Session::flash('success',$image_name. ' Image Updated Succesfully');
              return back();
         }
    }
}
