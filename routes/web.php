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

Route::get('/', 'PagesController@home'); 
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

//to make controller resource with the boilerplate prefilled, in bash you would write: `php artisan make:controller <name> -r`.
Route::resource('projects', 'ProjectsController');

// ABOVE ROUTE IS SHORTCUT FOR EVERYTHING BELOW:
// Route::get('/projects', 'ProjectsController@index');
// // GET /projects -> fetch all of the resource (common convention, call it 'index')

// Route::get('/projects/create', 'ProjectsController@create');
// // GET /projects/create -> 'create'

// Route::get('/projects/{project}', 'ProjectsController@show');
// // GET /projects/1 -> 'show'

// Route::post('/projects', 'ProjectsController@store');
// // POST /projects -> 'store' 

// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// // GET /projects/1/edit -> 'edit'

// Route::patch('/projects/{project}', 'ProjectsController@update');
// // PATCH /projects/1 -> 'update'

// Route::delete('/projects/{project}', 'ProjectsController@destroy');
// // DELETE /projects/1 -> 'destroy'