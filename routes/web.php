<?php

#use App\Http\Controllers;
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

#Route::get('/', \App\Http\Controllers\PagesController::class);

#Route::get('/', PagesController::class);

#Route::resource('Task', TasksController::class);

Route::get('/home', 'PagesController@home');
#Route::get('/', [PagesController::class,'home']);
Route::resource('tasks', 'TasksController');

