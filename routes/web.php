<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
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

Auth::routes();

Route::view('/activity/add', 'add')->name('add');
Route::get('/activity/{id}/show', [ActivityController::class, 'show'])->name('show');
Route::post('/activity/store', [ActivityController::class, 'store'])->name('store');
Route::post('/activity/edit', [ActivityController::class, 'edit'])->name('edit');
Route::post('/activity/destroy', [ActivityController::class, 'destroy'])->name('destroy');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
