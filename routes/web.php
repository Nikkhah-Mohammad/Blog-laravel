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

Route::get('/','HomeController@index');
Route::get('/call','HomeController@call');
Route::get('/article/{id}','HomeController@getArticle');
Route::get('/about','HomeController@about');

Auth::routes();

Route::group(['middleware' => ['admin','api']],function () {
    Route::get('/admin','Admin\AdminController@index');
    Route::get('/admin/article','Admin\ArticleController@index');
    Route::get('/admin/article/edit/{id}','Admin\ArticleController@edit');
    Route::get('/admin/article/create','Admin\ArticleController@create');
    
    Route::get('/admin/article/new','Admin\ArticleController@add');
    
});




