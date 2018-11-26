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
//Route::get('/', "Web\\IndexController@index");
//Route::get('/Web', "IndexController@index")->name("/");
Route::namespace("Web")->group(function(){
    Route::get('/',"IndexController@index");// 首页
    Route::get('/login',"LoginController@login");// 登录页面
    Route::post('/signIn','SignController@signIn'); // 提交表单
});