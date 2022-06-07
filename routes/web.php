<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

Route::name('recipes.')->prefix('recipes')->group(function () {
    Route::get('', [RecipeController::class, 'index'])
        ->name('index');
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
        ->where('id', '[0-9]+');
});
