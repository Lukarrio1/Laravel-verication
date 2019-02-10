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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/','PagesController@index' )->name('home');

Route::resource('Account', 'AccountController');

Route::get('/verify/{token}','VerifyController@Verify')->name('verify');


Route::prefix('admin')->group(function () {
    
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    
    Route::get('/','AdminController@index')->name('admin.dashboard');  
});
