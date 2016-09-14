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

Route::get('/', function () {
    return view('test');
});
Route::get('/projects/',function(){
	return view('completed_projects');
});
Route::get('/project/calculator', function(){
	return view('calculator');
});
Route::get('/projects/{name}','ProjectsController@show');