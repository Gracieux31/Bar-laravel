<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\SiropController;
use App\Http\Controllers\LoginController;

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

// CRUD Fruit
Route::get('fruits', [FruitController::class, 'index']);
Route::get('add-fruit', [FruitController::class, 'create']);
Route::post('add-fruit', [FruitController::class, 'stockage']);
Route::get('edit-fruit/{id}', [FruitController::class, 'edit']);
Route::put('update-fruit/{id}', [FruitController::class, 'update']);
Route::delete('delete-fruit/{id}', [FruitController::class, 'destroy']);
// Route::get('fruits', 'FruitController@index');
// Route::get('fruits', 'FruitController@stockage')->name('fruits.stockage');


// CRUD Sirop
Route::get('sirops', [SiropController::class, 'index']);
Route::get('add-sirop', [SiropController::class, 'create']);
Route::post('add-sirop', [SiropController::class, 'stockage']);
Route::get('edit-sirop/{id}', [SiropController::class, 'edit']);
Route::put('update-sirop/{id}', [SiropController::class, 'update']);
Route::delete('delete-sirop/{id}', [SiropController::class, 'destroy']);


Route::get('/login', [LoginController::class]);

// Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
