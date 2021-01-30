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

Route::get('/', function () {
    return view('welcome');
});

// show tools page
Route::get('/toolsadd', 'ToolsController@index');

// addtool into table
Route::post('/addtool', 'ToolsController@inserttool')->name('addtool');

// show tools table
Route::get('/toolspage', 'ToolsController@display');

// update page go url (in view page update btn)
Route::get('/updatetoolbtn/{id}','ToolsController@updatebtn');

// click update button function
Route::put('/updatetool/{id}', 'ToolsController@update');

//delete button
Route::get('/deletetoolbtn/{id}','ToolsController@deletebtn');