<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('kamar', 'kamar')->name('kamar');

Route::group([
    'prefix'=>config('admin.path'),  
], function(){

    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::group(['middleware'=> 'auth:admin'], function(){
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::view('/','dashboard')->name('dashboard');
        route::group(['middleware'=>['can:role,"admin"']] ,function(){
           route::resource('admin','Admincontroller');
        });

    });

});
