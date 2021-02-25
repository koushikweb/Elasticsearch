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


use App\Article;
use App\Agent;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'ArticleController@listing');
Route::get('/articleSearch', 'ArticleController@index');
Route::post('/articleSearchCreate', 'ArticleController@create');
Route::get('/search', 'PolicyController@search');
Route::get('/', 'PolicyController@listing');
Route::get('/addrecord', 'PolicyController@index');
Route::post('/createpolicy', 'PolicyController@create');
Route::post('/createagent', 'AgentController@create');



//Route::get('about', 'AboutController@index');
//Route::get('todos', 'TodosController@index');
