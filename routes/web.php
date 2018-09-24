<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);
  
  // Password Reset Routes...
  Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
  ]);
  Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
  ]);
  Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
  ]);
  Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
  ]);
  
  // Registration Routes...
  Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
  ]);
// Auth::routes();

//admin route
Route::get('admin',[
    'uses' => 'AdminController@index',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//po route
Route::get('po',[
    'uses' => 'PurchaseOfficerController@index',
    'middleware' => 'roles',
    'roles' => ['Purchase Officer']
]);
// Route::get('sm',[
//     'uses' => 'StoreMgrController@index',
//     'middleware' => 'roles',
//     'roles' => ['Store Mgr']
// ]);
// Route::get('user',[
//     'uses' => 'UserController@index',
//     'middleware' => 'roles',
//     'roles' => ['User']
// ]);
// Route::get('sm/home',['uses' => 'StoreMgrController@index',
// 'middleware' => 'roles',
// 'roles' => ['Store Mgr']
// ]);
Route::group(['prefix' => 'sm', 'middleware' => 'roles',
'roles' => ['Store Mgr']], function () {
    Route::get('/', 'StoreMgrController@index');
    Route::get('pending', 'StoreMgrController@pending');
    Route::get('/lel', function(){
        return view('sm');
    });
});
Route::group(['prefix' => 'user', 'middleware' => 'roles',
'roles' => ['User']], function () {
    Route::get('/', 'UserController@index');
    Route::get('request', 'UserController@requestasset');
    Route::get('view', 'UserController@viewindents');
    Route::post('request/post', 'UserController@postindent');
    Route::get('/lel', function(){
        return view('user');
    });
});
Route::get('/home', 'HomeController@index')->name('home');
