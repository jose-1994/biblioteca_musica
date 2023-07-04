<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/', function () {
    return view('album');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::resource('album','App\Http\Controllers\AlbumController');
Route::resource('artistas','App\Http\Controllers\ArtistaController');

});

Route::name('viewalbums')->get('/viewalbums', '\App\Http\Controllers\AlbumController@viewalbums');

Route::name('print')->get('/imprimir', '\App\Http\Controllers\GeneradorController@imprimir');

Route::name('printAlbums')->get('/imprimirAlbums/{id}', '\App\Http\Controllers\AlbumController@imprimirAlbum');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
