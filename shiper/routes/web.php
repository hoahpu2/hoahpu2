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
	if(!Auth::user()){
		return view('welcome');
	}
    return view('layout');
});
Route::get('admin-login', function () {
	if(!Auth::user()){
		return view('admin.login.login')->with(['body' => 'hold-transition login-page']);
	}
    return view('admin.Dashboard.Home.home')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
})->name('admin-login');

Route::get('admin-register', function () {
	if(!Auth::user()){
		return view('admin.login.register')->with(['body' => 'hold-transition login-page']);
	}
    return view('admin-home')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
})->name('admin-register');

Route::get('admin-home', function () {
	if(Auth::user()){
		return view('admin.Dashboard.Home.home')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
	}
    return view('admin.login.login')->with(['body' => 'hold-transition login-page']);
})->name("admin-home");

Route::resource('order', 'OrderController');
Route::get('revenue', 'UserController@revenue')->name('revenue');
Route::get('logout', 'UserController@logout');

Route::post('signup', 'UserController@postSignUp');
Route::get('signin', 'UserController@getSignIn')->name('signin');
Route::post('signin', 'UserController@postSignIn');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
