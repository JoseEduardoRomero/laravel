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


Route::get('/users', function(){
    return json_encode(array('name'=> "Hello World",array('users'=>['user' => 'Cesar'])));
});
Route::get('/democontroller', 'App\Http\Controllers\DemoController@pokemon');
Route::get('/','App\Http\Controllers\TargetController@index')->name('home');
Route::get('create','App\Http\Controllers\TargetController@create')->name('create');
Route::get('edit','App\Http\Controllers\TargetController@edit')->name('edit');
