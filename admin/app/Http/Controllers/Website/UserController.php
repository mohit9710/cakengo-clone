<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Auth;
use App\User;
use Hash;
use Session;

class UserController extends Controller
{
    public function login(request $request){

    	request()->validate([
    		'email'    => 'required',
    		'password' => 'required',
    	]);

    	$check = User::where('email',$request->email)->first();

    	if ($check) {
    			
    		if (Hash::check($request->password, $check->password)) {
    			Session::flash('success','Login Successfully');
    			Auth::loginUsingId($check->id);
    			return back();
    		}
    		else
    		{	

    			Session::flash('error','Wrong Password');
    			return back();
    		}
    	}
    	else
    	{

    		Session::flash('error','Credentials Not Found');
    	    return back();
    	}
   	
    }
}
