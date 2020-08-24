<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::bind('product', function($slug){
    return App\Product::where('slug',$slug)->first();
  });

  Route::bind('category', function($category){
    return App\Category::find($category);
  });

  //Dependencias de usuarios
  Route::bind('user', function($user){
    return App\User::find($user);
  });
  
Route::get('/', [
    'as' =>'home',
    'uses' => 'StoreController@index'

]);

Route::get('product/{slug}', [
    'as' =>'product-detail',
    'uses' => 'StoreController@show'

]);

//Carrito de compras
Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
  ]);
  
  
  Route::get('cart/add/{product}',[
      'as' => 'cart-add',
      'uses' =>'CartController@add'
  
  ]);
  
  Route::get('cart/delete/{product}',[
    'as' => 'cart-delete',
    'uses' =>'CartController@delete'
  
  ]);
  
  
  Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' =>'CartController@trash'
  
  ]);
  
  Route::get('cart/update/{product}/{quantity?}',[
    'as' => 'cart-update',
    'uses' =>'CartController@update'
  
  ]);
  //Para ver si el usuario inicio sesion
  Route::get('order-detail',[
    'middleware' => 'auth',
    'as' =>'order-detail',
    'uses'=>'CartController@orderDetail',
    
  ]);

  // Authentication routes...
Route::get('auth/login', [
  'as'=>'login-get',
  'uses'=>'Auth\AuthController@getLogin'
]);
Route::post('auth/login',[
'as'=>'login-post',
'uses'=>'Auth\AuthController@postLogin'
]);
Route::get('auth/logout',[
  'as'=>'logout',
   'uses'=>'Auth\AuthController@getLogout'
   ]);

// Registration routes...
Route::get('auth/register',[
  'as'=>'register-get',
  'uses'=> 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
  'as'=>'register-post',
  'uses'=>'Auth\AuthController@postRegister'
]);


//Enviamos pedido por paypal
Route::get('payment',array (
  'as'=>'payment',
  'uses'=>'PaypalController@postPayment',
));
//Paypal redirecciona esta ruta
Route::get('payment/status',array (
  'as'=>'payment.status',
  'uses'=>'PaypalController@getPaymentStatus',
));

//admins

Route::resource('admin/category','Admin\CategoryController');

Route::resource('admin/product','Admin\ProductController');

Route::resource('admin/user','Admin\UserController');


// Obtenemos todos los pedidos
Route::get('admin/orders', [
  'as' => 'admin.order.index',
  'uses' => 'Admin\OrderController@index'
]);

