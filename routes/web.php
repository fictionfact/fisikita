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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/admin/login');

Route::redirect('/home', '/admin/dashboard');

Route::get('admin/login', 'Auth\LoginController@index');
Route::post('admin/login', 'Auth\LoginController@login')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Auth::routes();
Route::get('coba', function(){
	return Auth::User()->username;
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('logout', function(){
    	Auth::logout();
	    return Redirect::to('/');
    })->name('logout');
    // Route::get('dashboard', 'DashboardController@index');
});

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');


