<?php

use App\Http\Controllers\ClientController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/client', [ClientController::class, 'index']);

Route::controller(ClientController::class)->group(function () {
    Route::prefix('client')->group(function () {
    Route::get('/', 'index')->name('clients.index');
    Route::get('/create', 'create');
    Route::post('/create', 'store')->name('clients.create');
    Route::get('/show/{client}', 'show')->name('clients.show');
    Route::get('/edit/{client}', 'edit')->name('clients.edit');
    Route::post('/edit/{client}', 'update');
    Route::get('/delete/{client}', 'destroy')->name('clients.delete');
    });
});

require __DIR__.'/auth.php';
