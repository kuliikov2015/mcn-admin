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


Route::resource('roll_types', 'RollTypesController', ['only' => ['index', 'store', 'create']]);
Route::resource('steel_types', 'SteelTypesController', ['only' => ['index', 'store', 'create']]);
Route::resource('items', 'ItemsController', ['only' => ['index', 'store', 'create', 'destroy']]);