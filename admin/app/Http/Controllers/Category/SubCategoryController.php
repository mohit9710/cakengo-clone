<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\Category\Category;
use App\Model\Category\Sub_Category;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('sub__categories')
                    ->join('categories', 'categories.id','=', 'sub__categories.category_id')
                    ->select('sub__categories.*','categories.category as category_name')
                    ->get();
       $category = Category::all();
        return view('Admin.Category.sub_category', compact('data', 'category'));
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
            'category_id'        => 'required',
            'sub_category'       => 'required',
        ]);

        /*insert Category*/
        $sub_category = Sub_Category::create([
            'category_id'      =>  $request->category_id,
            'sub_category'     =>  $request->sub_category,
        ]);

        Session::flash('success', $request->sub_category. ' Succesfully Added');
        return back();
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Category $sub_Category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*ajax response*/
        $subcategory =DB::table('sub__categories')
                            ->where('category_id',$id)
                            ->pluck('sub_category','id');
        return response()->json($subcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*validate data*/
         $request->validate([
            'category_id'        => 'required|max:255',
            'sub_category'       => 'required',
        ]);

         /*store data in variable*/
        $category_id        = $request->category_id;
        $sub_category       = $request->sub_category;
        $image              = $request->image;

                $update = Sub_Category::where('id', $id)->update([
                    'category_id'      =>  $request->category_id,
                    'sub_category'     =>  $request->sub_category,
                    'updated_at'       =>  Carbon::now(),
                ]);
           

        Session::flash('success', $request->sub_category. ' Sub Category Updated Succesfully');
        return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sub_Category  $sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_Category $sub_Category)
    {
        //
    }
}
