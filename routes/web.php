<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;
use App\Http\Controllers\FruitController;


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

Route::get('fruits', [FruitController::class, 'index']);
Route::get('add-fruit', [FruitController::class, 'create']);
Route::post('add-fruit', [FruitController::class, 'stockage']);
Route::delete('delete-fruit/{id}', [FruitController::class, 'destroy']);
// Route::get('fruits', 'FruitController@index');
// Route::get('fruits', 'FruitController@stockage')->name('fruits.stockage');

// Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");

Route::resource('/management/menu',"\App\Http\Controllers\management\menuController");

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');