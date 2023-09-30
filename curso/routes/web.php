<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;

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

Route::get('/clase', [PageController::class, 'clases']);
//vista
Route::get('/agregar-blog',[PageController::class, 'agregar_blog']);

//controlador
Route::post('/agregar-blog', [CourseController::class, 'informacion']);


Route::get('/curso/{course:slug}', [PageController::class, 'course'])->name('course');

Route::get('/clase', function () {
    return view('clase');
});

Route::delete('/curso/{course:id}', 'App\Http\Controllers\CourseController@destroy', function () {
})->middleware('auth');

Route::get('/curso/{course:id}/editar', 'App\Http\Controllers\PageController@edit', function () {
})->middleware('auth');

Route::put('/curso/{course:id}/editar','App\Http\Controllers\PageController@update' , function () {
})->middleware('auth')->name('curso.editar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/agregar-curso',[PageController::class, 'agregar_curso']);
});
