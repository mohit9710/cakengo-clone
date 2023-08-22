<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller; 
use App\Model\Inventory\Product;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Session;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
      public function index()
    {   

        $query =Product::query();
         
         /*Run ALL The Query*/
        $data = $query->join('categories','categories.id','products.category_id')
                      ->join('sub__categories','sub__categories.id','products.sub_category_id')
                      ->select('products.*','categories.category','sub__categories.sub_category')
                      ->orderby('id','DESC')
                      ->paginate(20);

        $category = DB::table('categories')->get();
        return view('Admin.Inventory.Product.view_product',compact('data','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->get();
        return view('Admin.Inventory.Product.create_product',compact('category'));
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
            'category_id'        => 'required|Integer',
            'subcategory_id'     => 'required|Integer',
            'subsubcategory_id'  => 'nullable|Integer',
            'meta_title'         => 'nullable',
            'meta_keywords'      => 'nullable',
            'title'              => 'required|string|unique:products',
            'image'              => 'required',
            'offer_amount'       => 'required',
            'description'        => 'required|string',
        ]);

        $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$request->image->getClientOriginalName();
        $request->image->move('img/product', $image_name);

        $insert = new Product;
        $insert->category_id         = $request->category_id;
        $insert->sub_category_id     = $request->subcategory_id;
        $insert->sub_sub_category_id = $request->subsubcategory_id;
        $insert->meta_title          = $request->meta_title;
        $insert->meta_keyword        = $request->meta_keywords;
        $insert->title               = $request->title;
        $insert->main_image          = $image_name;
        $insert->offer_amount        = $request->offer_amount;
        $insert->description         = $request->description;
        $insert->eggless_description = $request->egglessdescription;
        $insert->status              = 1;
        $insert->save();

        Session::flash('success','Product Enlist Successfully');
        return redirect()->route('product_size.edit',$insert->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = DB::table('product_file')->where('product_id',$id)->get();
        return view('Admin.Inventory.Product.file',compact('id','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {   
        $category = DB::table('categories')->get();
        $sub_category = DB::table('sub__categories')->where('id',$product->sub_category_id)->get();
        $sub_sub_category = DB::table('sub__sub__categories')->where('id',$product->sub_sub_category_id)->get();
        return view('Admin.Inventory.Product.edit_product',compact('category','product','sub_category','sub_sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'category_id'        => 'required|Integer',
            'subcategory_id'     => 'required|Integer',
            'subsubcategory_id'  => 'nullable|Integer',
            'title'              => 'required|string',
            'meta_title'         => 'nullable',
            'meta_keywords'      => 'nullable',
            'image'              => 'nullable',
            'description'        => 'required|string',
            'status'             => 'required',
            'egglessdescription' => 'required|string',
        ]);

        if (isset($request->image)) {

            $file_check = file_exists('img/product/'.$product->main_image);
            if ($file_check == true) {            
                unlink('img/product/'.$product->main_image);
            }

            $image_name  =strtotime(date('Y-m-d H:i:s')).'_'.$request->image->getClientOriginalName();
            $request->image->move('img/product', $image_name);
        }
        else
        {
            $image_name = $product->main_image;
        }
        

        if ($product->title == $request->title) {
            $title = $request->title;
        }
        else
        {
            $check = Product::where('title',$request->title)->first();

            if ($check) {
                Session::flash('info','Product Already Exist');
            }
            else
            {
                $title = $request->title;
            }

        }

        $insert = Product::find($product->id);
        $insert->category_id         = $request->category_id;
        $insert->sub_category_id     = $request->subcategory_id;
        $insert->sub_sub_category_id = $request->subsubcategory_id;
        $insert->meta_title          = $request->meta_title;
        $insert->meta_keyword        = $request->meta_keywords;
        $insert->title               = $title;
        $insert->main_image          = $image_name;
        $insert->offer_amount        = $request->offer_amount;
        $insert->description         = $request->description;
        $insert->eggless_description = $request->egglessdescription;
        $insert->status              = $request->status;
        $insert->save();

        Session::flash('success','Product Update Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data =  DB::table('product_file')->where('id',$id)->first();

       $file_check = file_exists('img/product/'.$data->files);
        if ($file_check == true) {            
            unlink('img/product/'.$data->files);
        }

        DB::table('product_file')->where('id',$id)->delete();

        Session::flash('success','Files Successfully Delete');
        return back();
    }

    public function productupload()
    {
        return view('Admin.Inventory.Product.bulkupload');
    }

    public function bulkupload()
    {
        Excel::import(new ProductsImport,request()->file('file'));
           
        return back();
    }
}
