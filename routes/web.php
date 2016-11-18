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

Route::get('/', 'AppController@dashboard');
Route::post('/select_project', 'AppController@selectProject');


Route::get('project/{project}', ['as'=>'project.show', 'uses'=>'ProjectController@show']);

Route::post('project/{project}/related_table', ['as'=>'relatedTable.store', 'uses'=>'ProjectController@relatedTable']);
