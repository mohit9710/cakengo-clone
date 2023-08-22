<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        $category = DB::table('categories')->count();
        $products = DB::table('products')->count();
        $product_limit = DB::table('products')->orderby('id','DESC')->limit(5)->get();
        $total_order = DB::table('checkout')->count();
        $users = DB::table('users')->count();
        $checkout = DB::table('checkout')->join('users','users.id','checkout.auth_id')
                                     ->where('checkout.status',0)
                                     ->select(
                                        'checkout.*',
                                        'users.name',
                                        'users.email',
                                        'users.mobile'
                                    )
                                     ->limit(10)
                                     ->get();


        return view('Admin.home',compact('category','products','product_limit','total_order','users','checkout'));
    }
}
