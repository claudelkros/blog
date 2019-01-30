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
Route::group(['prefix' => 'admin'], function (){
    Route::get('/salut', 'welcom@index');
});

Route::get('a-propos', ['as' => 'about', 'uses' => 'PagesController@about']);
//Route::get('salut/{slug}-{id}', ['as' => 'Salut',function ($slug, $id){
////    return "Lien: " . route('Salut', ['slug' => $slug, 'id' => $id]);
////}])->where('slug', '[a-z0-9\-]+')->where('id', '[0-9]+');