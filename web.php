<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//use function PHPUnit\Framework\returnSelf;

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

// //Route::get('hallo', 'App\Http\Controllers\HelloController@index');
// Route::get('hallo', 'App\Http\Controllers\HelloController@index');
// Route::get('word', 'App\Http\Controllers\HelloController@word');

Route::post('posts', [PostController::class, 'store']);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::get('posts/{id}/edit', [PostController::class, 'edit']);
Route::patch('posts/{id}', [PostController::class, 'update']);

