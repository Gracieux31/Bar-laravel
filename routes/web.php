<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;

use App\Http\Controllers\SiropsController;

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

<<<<<<< HEAD
Route::get(
    'sirops',
    [SiropsController::class, 'index']
)->name('sirops.show');
=======
Route::get('/management', function () {
    return view('management.index');
});



// Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");

Route::resource('/management/menu',"\App\Http\Controllers\management\menuController");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 3f843658fb84f033b14f912b3959d4e7cbd42444
