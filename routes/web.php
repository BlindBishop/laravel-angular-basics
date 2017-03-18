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
use App\Todo;


Route::get('/', function () {
    return view('index');
});


// resource controllers
// https://laravel.com/docs/5.4/controllers
Route::resource('todos', 'TodosController');