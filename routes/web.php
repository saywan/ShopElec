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



Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('index',[
    'uses'=>'HomeController@index',
    'as'=>'index'
]);
Route::get('/listproduct','ProductController@listproduct');
Route::post('Addorder','ProductController@AddOrder');
Route::get('Product/{id}','ProductController@DetailsProduct');
Route::get('Category/{id}','HomeController@ShowCategory');
Route::get('request','ProductController@request');
Route::get('AboutUs','HomeController@AboutUs');
Route::get('ContactUs','HomeController@ContactUs');
Route::post('Addrequest','ProductController@Addrequest');




Auth::routes();

Route::group(['prefix' => 'admin/','middleware'=>['Admin']],function (){

    Route::get('/','AdminController@index');

    Route::get('ListProduct','ProductController@ListProduct');

    Route::post('EditProd','ProductController@EditProd');


    Route::get('AddProduct','ProductController@index');
    Route::post('DeleteProduct','ProductController@DeleteProduct');
    Route::post('AddProduct','ProductController@AddProduct');
    Route::post('ProductImage','ProductController@ProductImage');



    Route::get('AddCat','ProductController@ShowFormAdd');
    Route::post('AddCategory','ProductController@AddCategory');
    Route::get('GetCategory','ProductController@GetCategory');

    Route::get('listCategory','ProductController@listCategory');
    Route::post('DeleteCat','ProductController@DeleteCat');
    Route::post('EditCat','ProductController@EditCat');
    Route::get('listOrder','ProductController@getOrder');
    Route::get('ListUser','ProductController@ListUser');
    Route::get('OrderRequest','ProductController@OrderRequest');



});

Route::group(['prefix' => 'User/','middleware'=>['auth']],function (){


    Route::get('Profile',[
        'uses'=>'HomeController@profile',
        'middleware'=>'auth',

    ]);

    Route::get('Cart',[
        'uses'=>'ProductController@getCart',
        'as'=>  'Cart'
    ]);

  /*  Route::get('Cart/{id}',[
        'uses'=>'ProductController@getAddToCart',
        'as'=>  'Cart'
    ]);*/

    Route::get('/shopping-carts',[
        'uses'=>'ProductController@getCart',
        'as'=>  'product.shoppingCart'
    ]);

    Route::get('Checkout',[
        'uses'=>'ProductController@getCheckout',
        'middleware'=>'auth',
        'as'=>'Checkout'

    ]);

});
