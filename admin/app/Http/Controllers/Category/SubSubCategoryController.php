<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Model\Category\Category;
use App\Model\Category\Sub_Category;
use App\Model\Category\Sub_Sub_Category;
use DB;
use Auth;
use Session;    
use Carbon\Carbon;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('sub__sub__categories')->join('sub__categories', 'sub__categories.id', '=', 'sub__sub__categories.sub_category_id')
                    ->join('categories', 'categories.id', '=', 'sub__sub__categories.category_id')
                    ->select('sub__sub__categories.*', 'sub__categories.sub_category', 'categories.category' )
                    ->get();
        // dd($data);
        $category = Category::all();
        return view('Admin.Category.sub_sub_category', compact('data', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        dd("abhishek");
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
            'sub_sub_category'   => 'required',
        ]);


        /*insert Category*/
        $sub_category = Sub_Sub_Category::create([
            'category_id'      =>  $request->category_id,
            'sub_category_id'  =>  $request->sub_category,
            'sub_sub_category' =>  $request->sub_sub_category,
        ]);

        Session::flash('success', $request->sub_sub_category. ' Succesfully Added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sub_Sub_Category  $sub_Sub_Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('sub__sub__categories')->join('sub__categories', 'sub__categories.id', '=', 'sub__sub__categories.sub_category_id')
                    ->join('categories', 'categories.id', '=', 'sub__sub__categories.category_id')
                    ->where('sub__sub__categories.id', $id)
                    ->select('sub__sub__categories.*', 'sub__categories.sub_category', 'categories.category' )
                    ->first();
        $category = Category::all();
        return view('Admin.Category.edit_ss_category', compact('data', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sub_Sub_Category  $sub_Sub_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*ajax response*/
        $subcategory =DB::table('sub__sub__categories')
                            ->where('sub_category_id',$id)
                            ->pluck('sub_sub_category','id');
        return response()->json($subcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sub_Sub_Category  $sub_Sub_Category
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
         /*validate data*/
         $request->validate([
            'category_id'        => 'required',
            'sub_category'       => 'required',
            'sub_sub_category'   => 'required',
        ]);

         /*store data in variable*/
        $category_id        = $request->category_id;
        $sub_category_id    = $request->sub_category;
        $sub_sub_category   = $request->sub_sub_category;

                $update = Sub_Sub_Category::where('id', $id)->update([
                    'category_id'      =>  $category_id,
                    'sub_category_id'  =>  $sub_category_id,
                    'sub_sub_category' =>  $sub_sub_category,
                    'updated_at'       =>  Carbon::now(),
                ]);

                    Session::flash('success',$sub_sub_category. 'Updated Succesfully');
                     return redirect()->route('sub_sub_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sub_Sub_Category  $sub_Sub_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_Sub_Category $sub_Sub_Category)
    {
        //
    }
}
