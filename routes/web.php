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
// Route::get('/management', function () {
//     return view('management.index');
// });

Route::get('sirops', [FruitController::class, 'index']);
Route::get('add-fruit', [FruitController::class, 'create']);
Route::post('add-fruit', [FruitController::class, 'stockage']);
Route::get('edit-student/{id}', [FruitController::class, 'edit']);
Route::put('update-sirop/{id}', [FruitController::class, 'update']);
Route::delete('delete-sirop/{id}', [FruitController::class, 'destroy']);
// Route::get('sirops', 'SiropController@index');
// Route::get('sirops', 'SiropController@stockage')->name('sirops.stockage');




// // Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
// Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');