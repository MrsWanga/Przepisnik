<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|p--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

    Route::get('index', [RecipeController::class, 'index'])
        ->name('index');
    Route::get('about', [RecipeController::class, 'about'])
        ->name('about');
//    Route::get('add', [RecipeController::class, 'add'])
//        ->name('add');
    Route::get('random', [RecipeController::class, 'random'])
        ->name('random');
    Route::get('create', [RecipeController::class, 'create'])
        ->name('create');
    Route::post('', [RecipeController::class, 'store'])
        ->name('store');
    Route::get('{id}', [RecipeController::class, 'show'])
        ->name('show')
        ->where('id', '[0-9]+');
    Route::get('{id}/edit', [RecipeController::class, 'edit'])
        ->name('edit')
        ->where('id', '[0-9]+');
    Route::patch('{id}', [RecipeController::class, 'update'])
        ->name('update')
        ->where('id', '[0-9]+');
    Route::get('{id}/delete', [RecipeController::class, 'destroy'])
        ->name('destroy')
        ->where(name: 'id', expression: '[0-9]+');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
