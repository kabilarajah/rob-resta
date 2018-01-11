<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


Route::get('admin/profile', ['middleware' => 'admin', function () {  
    //
}]);
|
*/
// Route::get('/', function () {
//     // return redirect('shop');

//     return view('home');



//     // return view('check');
// });


Route::get('/', ['uses'=> 'ProductController@frontIndex', 'as'=> 'front.index']);

// Route::post('/', ['uses'=> 'OrderController@notify', 'as'=> 'order.notify']);


Route::get('/add-product/{id}', ['uses'=> 'ProductController@view', 'as'=> 'product.view']);


Route::get('/products/create', ['uses'=> 'ProductController@create', 'as'=> 'product.create']);

Route::post('/products', ['uses'=> 'ProductController@store', 'as'=> 'product.store']);

Route::get('/products/{id}/edit', ['uses'=> 'ProductController@edit', 'as'=> 'product.edit']);

Route::resource('/products','ProductController');

Route::delete('/products/{id}', ['uses'=> 'ProductController@destroy', 'as'=> 'product.delete']);

Route::get('/product/{id}', ['uses'=> 'ProductController@show', 'as'=> 'product.show']);







Route::get('/shop', ['uses'=> 'ProductController@getIndex', 'as'=> 'product.index']);


Route::get('/add-to-cart/{id}',
	['uses'=> 'ProductController@getAddToCart', 'as'=> 'product.addToCart']);

Route::get('/shopping-cart',
	['uses'=> 'ProductController@getCart', 'as'=> 'product.shoppingCart','middleware' =>'auth']);

Route::get('/checkout',
	['uses'=> 'ProductController@getCheckout', 'as'=> 'checkout', 'middleware' =>'auth']);

Route::post('/checkout',
	['uses'=> 'ProductController@postCheckout', 'as'=> 'checkout', 'middleware' =>'auth']);





Route::get('/reduce/{id}',
	['uses'=> 'ProductController@getReduceByOne', 'as'=> 'product.reduceByOne']);

Route::get('/increase/{id}',
	['uses'=> 'ProductController@getIncreaseByOne', 'as'=> 'product.increaseByOne']);

Route::post('/updateqty',
	['uses'=> 'ProductController@updateqty', 'as'=> 'product.update']);

Route::get('/remove/{id}',['uses'=> 'ProductController@getRemoveItem', 'as'=> 'product.remove']);





Route::get('/user/profile',
	['uses'=> 'UserController@getProfile', 'as'=>'user.profile', 'middleware'=>'auth']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');









Route::get('/undelete', function() {
    return view('orders.del_order');
});


Route::get('/products/create', ['uses'=> 'ProductController@create', 'as'=> 'product.create']);

Route::post('/products', ['uses'=> 'ProductController@store', 'as'=> 'product.store']);

Route::get('/products/{id}/edit', ['uses'=> 'ProductController@edit', 'as'=> 'product.edit']);

Route::resource('/products','ProductController');


Route::delete('/products/{id}', ['uses'=> 'ProductController@destroy', 'as'=> 'product.delete']);


// Route::get('/product/{id}', ['uses'=> 'ProductController@delete', 'as'=> 'product.delete']);



Route::get('/product/{id}', ['uses'=> 'ProductController@show', 'as'=> 'product.show']);







//Order Controller



Route::get('/manual', ['uses'=> 'OrderController@getIndex', 'as'=> 'order.index', 'middleware' =>'admin']);

Route::get('/add-manual/{id}', ['uses'=> 'OrderController@getAddToCart', 'as'=> 'order.addToCart']);

Route::post('/ord-updateqty',
	['uses'=> 'OrderController@updateqty', 'as'=> 'order.update']);




Route::get('/ord-remove/{id}',['uses'=> 'OrderController@getRemoveItem', 'as'=> 'order.remove']);

Route::get('/ord-shopping-cart',
	['uses'=> 'OrderController@getCart', 'as'=> 'order.shoppingCart', 'middleware' =>'admin']);


Route::post('/ord-checkout',
	['uses'=> 'OrderController@postCheckout', 'as'=> 'order.checkout','middleware' =>'admin']);

Route::get('/orders/{id}/edit', ['uses'=> 'OrderController@edit', 'as'=> 'order.edit']);

Route::resource('/orders','OrderController');


Route::get('/orders-check/{id}', ['uses'=> 'OrderController@intoCart']);

Route::delete('/orders/{id}', ['uses'=> 'OrderController@destroy', 'as'=> 'order.delete']);


Route::post('updateServe', ['uses'=> 'OrderController@updateServe', 'as'=> 'updateserve']);
Route::post('updatenonServe', 'OrderController@updateNonServe');

Route::post('ispaid', 'OrderController@paid');




//invoice

Route::get('/invoice', ['uses'=> 'OrderController@getInvoice', 'as'=> 'order.invoice']);




//pass

Route::post('/passdata',
	['uses'=> 'PassController@passData', 'as'=> 'passdata']);

Route::get('/sendData_table', ['uses'=> 'PassController@sendData_table', 'as'=> 'senddata_table']);

Route::get('/sendData_name', ['uses'=> 'PassController@sendData_name', 'as'=> 'senddata_name']);