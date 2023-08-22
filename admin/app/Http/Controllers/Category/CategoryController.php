<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\Category\Category;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*get categories*/
        $data  = Category::all();
        return  view('Admin.Category.category', compact('data'));
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
            'category'      => 'required|unique:categories|max:255',
            'image'         => 'required',
        ]);

                 /*insert Image*/
            $image = $request->image;
            $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
            $image->move('img/category', $image_name);

            /*insert Category*/
            $Category = Category::create([
                'category'      =>  $request->category,
                'type'          =>  $request->type,
                'description'   =>  $request->description,
                'image'         =>  $image_name,
            ]);

            Session::flash('success', $request->category. ' Category Succesfully Added');
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
        $request->validate([
            'category'      => 'required|max:255',
        ]);

        $category       = $request->category;
        $type           = $request->type;
        $description    = $request->description;
        $image          = $request->image;

        $data = Category::where('id', $id)->first();    
                
        if ($category == $data->category){

            if (isset($image)){
                $image_name = strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
                $image->move('img/category', $image_name);

                $update = Category::where('id', $id)->update([
                    'type'          => $type,
                    'description'   => $description, 
                    'image'         => $image_name,
                    'updated_at'     => Carbon::now(),
                ]);

                Session::flash('success', $request->category. ' Category Updated Succesfully');
                return back(); 
            }

            else{

                $update = Category::where('id', $id)->update([
                    'type'          => $type,
                    'description'   => $description, 
                    'updated_at'     => Carbon::now(),
                ]);

                Session::flash('success', $request->category. ' Category Updated Succesfully');
                return back(); 
            }
        }
        else{

            $category_data = Category::where('category', $category)
                                      ->get();
            if(count($category_data)>0){
                Session::flash('error', $request->category. ' Category Already Exist');
                return back(); 
            }
            else{
                if (isset($image)){

                    $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$image->getClientOriginalName();
                    $image->move('img/category', $image_name);
                    $update = Category::where('id', $id)->update([
                        'category'      =>$category,
                        'type'          => $type,
                        'description'   => $description, 
                        'image'         => $image_name,
                        'updated_at'     => Carbon::now(),
                    ]);

                    Session::flash('success', $request->category. ' Category Updated Succesfully');
                    return back(); 
                }

                else{
                      $update = Category::where('id', $id)->update([
                        'category'      =>$category,
                        'type'          => $type,
                        'description'   => $description,                         
                        'updated_at'     => Carbon::now(),
                    ]);
                    Session::flash('success', $request->category. ' Category Updated Succesfully');
                    return back(); 
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
