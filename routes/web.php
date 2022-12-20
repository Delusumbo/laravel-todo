<?php

use App\Http\Controllers\todoapp;
use App\Http\Controllers\todocontroller;
use App\Models\todo;
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

// Route::get('/',[todoapp::class,'index'] );
Route::get('/', function(){
    return view('index',[
        'list' => todo::all()
    ]);
});

// Route::get('/todo/create',[todoapp::class,'create'] );


Route::POST('todo', [todoapp::class,'store']);

Route::get('/todo', [todoapp::class,'create']);

Route::POST('todo', [todoapp::class,'store']);
