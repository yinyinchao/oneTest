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

Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//Route::get('/',function(){
//    return"你好";
//});
Route::get('article/index','ArticleController@index');
Route::get('goods/','goodsController@index');
Route::post('goods/add','goodsController@add');
Route::any('goods/show','goodsController@show');
//Route::get('goods/add','goodsController@add');

//Route::get("user/{name?}",function($name="2342342"){
//    return "尹超".$name;
//});
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
