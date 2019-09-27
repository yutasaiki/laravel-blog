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
    // 記事一覧画面をルートとする。
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 記事一覧画面
Route::get('/blog/article/list', 'ArticleViewController@list');

// 記事詳細画面
Route::get('/blog/article/detail', 'ArticleViewController@detail');

// 記事作成画面
Route::get('/blog/article/create', 'ArticleViewController@create');

// 記事編集画面
Route::get('/blog/article/edit', 'ArticleViewController@edit');

 //記事作成
 Route::post('/blog/article/create', 'ArticleController@create');

 //記事更新
Route::post('/blog/article/update', 'ArticleController@update');
