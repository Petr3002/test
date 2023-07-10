<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(TaskController::class)->name('task.')->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{model}', 'edit')->name('edit');
    Route::get('{model}', 'get')->name('get');
    Route::post('/', 'post')->name('post');
    Route::post('put/{model}', 'put')->name('put');
    Route::delete('{model}', 'delete')->name('delete');
});
