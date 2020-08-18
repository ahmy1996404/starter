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

//Route::get('/', function () {
//    $data=[];
//    $data['string']='ahmed hamouda';
//    $data['age']='2 ';
//
//    return view('welcome' , $data);
//});
//
//Route::get('index', 'Front\UserController@getIndex');
//
//
//Route::get('/test1', function () {
//    return 'Hello Laravel';
//});
//
//Route::get('/landing', function () {
//    return view('landing');
//});
//Route::get('/about', function () {
//    return view('about');
//});
//
//
////----------route parameter---------------------
//
////required parameter
//
////Route::get('/test2/{id}', function ($id) {
////    return $id;
////});
////
//////optional
////Route::get('/test3/{id?}', function () {
////    return 'hello laravel';
////});
//
////----------route name---------------------
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//}) -> name('a');
//
////optional
//Route::get('/show-string/{id?}', function () {
//    return 'hello laravel';
//}) -> name('b');
//
//
//// ------------name space ------------------
//
//Route::prefix('Front')->group(function(){
//
////    alrouts only access controller or methods in folder name fron
//    Route::get('users','userController@showUserName');
//});
//
//Route::group(['namespace'=>'Admin'], function (){
//    Route::get('second','SecondController@showString');
//
//});

Auth::routes(['verify'=>true]) ;

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function(){
    return 'HOME';
});

