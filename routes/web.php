<?php

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
Route::get('/ware', function () {
    return view('ware');
});
Route::get('/buy', function () {
    return view('buy');
});
Route::post('/products', [\App\Http\Controllers\ContactsControllers::class, 'submit']);

Route::get('/unique', function () {
    return view('unique');
});
Route::post('/unique', [\App\Http\Controllers\UniqueControllers::class, 'unique']);

Route::get('/grozs', function () {
    return view('grozs');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
