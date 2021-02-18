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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

// Route Backend
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('dashboard', ['as'=>'admin.index','uses'=>'AdminController@index']);

    //group product
    Route::group(['prefix' => 'product'], function(){
        Route::get('list',['as' => 'admin.product.list','uses' => 'ProductController@getList']);
    });

    // group unit
    Route::group(['prefex' => 'unit'], function(){
        Route::get('list', ['as' => 'admin.unit.list', 'uses' => 'UnitController@getList']);
        Route::get('add', ['as' => 'admin.unit.getAdd', 'uses' => 'UnitController@getAdd']);
        
    });
});