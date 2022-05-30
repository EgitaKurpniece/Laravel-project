<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/show/{post}', [IndexController::class, 'show']);

Route::get('/dashboard', [ClientController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/clients', [ClientController::class, 'index']);

Route::controller(ClientController::class)->group(function () {
    Route::prefix('clients')->group(function () {
    Route::get('/', 'index')->name('clients.index');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('clients.create');
    Route::get('/show/{client}', 'show')->name('clients.show');
    Route::get('/edit/{client}', 'edit')->name('clients.edit');
    Route::post('/edit/{client}', 'update');
    Route::get('/delete/{client}', 'destroy')->name('clients.delete');
    });
});

Route::controller(CommentController::class)->group(function () {
    Route::prefix('comments')->group(function () {
        Route::post('/store', 'store')->name('comments.store');
    });
});

require __DIR__.'/auth.php';
