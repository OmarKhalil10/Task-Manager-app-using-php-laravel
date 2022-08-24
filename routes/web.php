<?php

use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/new', [HomeController::class, 'new']);

Route::post('/addtask', [HomeController::class, 'store']);

Route::get('/task/delete/{id}', [HomeController::class, 'remove']);

Route::get('/task/edit/{id}', [HomeController::class, 'edit']);

Route::post('/task/update/{id}', [HomeController::class, 'update']);





