<?php

use App\Http\Controllers\API\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TaskController::class)->prefix('task')->name('task.')->group(function (){
    Route::get('test/api/task', function(){
        return redirect('/');
    });
    Route::get('/', 'index')->name('index');
    Route::get('{model}', 'get')->name('get');
    Route::post('/', 'post')->name('post');
    Route::put('{model}', 'put')->name('put');
    Route::delete('{model}', 'delete')->name('delete');
});
