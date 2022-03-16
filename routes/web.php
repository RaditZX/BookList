<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\post;

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

Route::get('/list',[PostController::class,'index'] );
Route::get('/',function (){
    return view('home',[
        "title" => "Home"
]);
});

Route::post('tambah',[PostController::class,'store'] );
Route::post('update/{id}',[PostController::class,'update'] );
Route::get('/tambah',[PostController::class,'create'] );
Route::get('/edit/{id}',[PostController::class,'edit'] );
Route::get('/delete/{id}',[PostController::class,'delete'] );
Route::get('/detail/{id}', [PostController::class,'show']);

