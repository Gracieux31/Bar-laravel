<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;

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

Route::get('/management', function () {
    return view('management.index');
});



// Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
