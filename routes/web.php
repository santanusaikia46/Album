<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PhotoController::class, 'index']);
Route::get('/home', [PhotoController::class, 'redirect']);
Route::get('/view', [PhotoController::class, 'view']);
Route::post('/create_album', [AdminController::class, 'createAlbum']);
Route::get('/album', [AdminController::class, 'album']);
Route::get('/showalbum', [AdminController::class, 'showalbum']);

Route::get('/image', [AdminController::class, 'image']);
Route::get('/admin/create/{id}', [PhotoController::class, 'create']);
Route::get('/addImage', [PhotoController::class, 'addImage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
