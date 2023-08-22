<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function(){
 
 		/*user*/
 		Route::resource('user', 'User\UserController');

		Route::resource('roles','Roles\RoleController');
		Route::resource('users','Roles\UserController');
		Route::resource('banner','CMS\BannerController');
        Route::resource('pages','CMS\PagesController');
		/*Category*/
		Route::resource('category','Category\CategoryController');
		Route::resource('sub_category','Category\SubCategoryController');
		// Route::resource('sub_sub_category','Category\SubSubCategoryController');

		/*Voucher*/
		Route::resource('voucher','Voucher\VoucherController');

		/*Inventory*/
		Route::resource('product','Inventory\ProductController');
		Route::resource('product_size','Inventory\ProductsizeController');
		Route::resource('stock','Inventory\StockController');
		Route::get('productupload','Inventory\ProductController@productupload');
		Route::post('bulkupload','Inventory\ProductController@bulkupload');

		/*query Section*/
		Route::get('support/query','Query\QueryController@view_support');
		Route::get('training/query','Query\QueryController@view_training');
		Route::get('contact/query','Query\QueryController@view_contact');

		/*Pincode Section*/
		Route::resource('pincode','Pincode\PincodeController');
		Route::get('pincode/delete/{id}','Pincode\PincodeController@delete')->name('pincode.delete');

		/*Orders*/
		Route::resource('orders','Order\OrderController');

		/* Home Page Images */
		Route::get('image/show','CMS\PagesController@home_images');
		Route::post('image/edit','CMS\PagesController@images_edit');

});
