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

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::group(['prefix' => 'manager'],function(){
        Route::get('/',function(){
            return 'ini halaman manager';
        });
        Route::get('rizal',function(){
            return'ini halaman manager rizal </b>';
        });
       
});        

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
