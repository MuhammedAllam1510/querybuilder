<?php

use App\Http\Controllers\PostsController;
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
Route::controller(PostsController::class)->group(function (){
    Route::get('post/create' , 'create');
    Route::post('post/Store' , 'store')->name('post.store');
    Route::get('post/display' , 'display')->name('post.display');
    Route::get('post/edite/{id}' , 'Edite')->name('post.edite');
    Route::PUT('post/update{id}' , 'Update')->name('post.update');
    Route::get('post/delete{id}' , 'delete')->name('post.delete');
    Route::get('post/DeletAll' , 'DeletAll')->name('post.DeletAll');
    Route::get('post/DeletAll/Truncate' , 'DeletAllTruncate')->name('post.DeletAll.Truncate');
});

//Route::get('post/create' , [PostsController::class , 'create']);
//Route::post('post/Store' , [PostsController::class , 'store'])->name('post.store');
//Route::get('post/display' , [PostsController::class , 'display'])->name('post.display');
//Route::get('post/edite/{id}' , [PostsController::class , 'Edite'])->name('post.edite');
//Route::post('post/update{id}' , [PostsController::class , 'Update'])->name('post.update');
