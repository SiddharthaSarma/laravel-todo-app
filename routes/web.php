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
Route::get('/todos', [
	'uses' => 'TodosController@index',
	'as' => 'todos'
]);
Route::post('/todos', [
	'uses' => 'TodosController@create'
]);

Route::get('/todo/delete/{id}', [
	'uses' => 'TodosController@delete',
	'as' => 'todos.delete'
]);

Route::get('/todo/update/{id}', [
	'uses' => 'TodosController@update',
	'as' => 'todos.update'
]);

Route::post('/todo/update/{id}', [
	'uses' => 'TodosController@save',
	'as' => 'todos.update'
]);