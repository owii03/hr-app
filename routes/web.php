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

Route::get('/', ['uses'=>'HomeController@index']);
Route::get('/login', ['uses'=>'HomeController@login'])->middleware('guest')->name('login');
Route::post('/dologin', ['uses'=>'HomeController@dologin'])->middleware('guest');
Route::get('/register', ['uses'=>'HomeController@register'])->middleware('guest');
Route::post('/doregister', ['uses'=>'HomeController@doregister'])->middleware('guest');
Route::get('/forgot', ['uses'=>'HomeController@forgot'])->middleware('guest');
Route::post('/doforgot', ['uses'=>'HomeController@doforgot'])->middleware('guest');

Route::get('/logout', ['uses'=>'HomeController@logout'])->middleware('auth');
Route::get('/password', ['uses'=>'HomeController@password'])->middleware('auth');
Route::post('/dopassword', ['uses'=>'HomeController@dopassword'])->middleware('auth');

Route::get('/fillcv', ['uses'=>'CvController@fillcv'])->middleware('auth');
Route::get('/viewcv', ['uses'=>'CvController@viewcv'])->middleware('auth');
Route::get('/onlinetest', ['uses'=>'TestController@onlinetest'])->middleware('auth');
Route::post('/dofillcv', ['uses'=>'CvController@dofillcv'])->middleware('auth');
Route::post('/dofilleducation', ['uses'=>'CvController@dofilleducation'])->middleware('auth');
Route::post('/dofillwork', ['uses'=>'CvController@dofillwork'])->middleware('auth');
Route::get('/viewuserresult',  ['uses'=>'CvController@viewuserresult'])->middleware('auth');

Route::get('/applicantselection', ['uses'=>'AdminController@applicantselection'])->middleware('auth');
Route::get('/selectionresult', ['uses'=>'AdminController@selectionresult'])->middleware('auth');
Route::get('/modifytest', ['uses'=>'AdminController@modifytest'])->middleware('auth');

Route::post('/doaddtest', ['uses'=>'AdminController@doaddtest'])->middleware('auth');
Route::post('/doedittest', ['uses'=>'AdminController@doedittest'])->middleware('auth');
Route::post('/dodeletetest', ['uses'=>'AdminController@dodeletetest'])->middleware('auth');

Route::post('/doaddpractice', ['uses'=>'AdminController@doaddpractice'])->middleware('auth');
Route::post('/dodeletepractice', ['uses'=>'AdminController@dodeletepractice'])->middleware('auth');
Route::post('/dodeleteresult', ['uses'=>'AdminController@dodeleteresult'])->middleware('auth');

Route::post('/doonlinetest', ['uses'=>'TestController@doonlinetest'])->middleware('auth');
Route::post('/dosaveresult', ['uses'=>'TestController@dosaveresult'])->middleware('auth');
Route::get('/choosetest', ['uses'=>'TestController@choosetest'])->middleware('auth');
Route::post('/starttest', ['uses'=>'TestController@starttest'])->middleware('auth');

