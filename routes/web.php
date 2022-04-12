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

Route::get('sirops', [SiropController::class, 'index']);
Route::get('add-sirop', [SiropController::class, 'create']);
Route::post('add-sirop', [SiropController::class, 'stockage']);
Route::get('edit-student/{id}', [SiropController::class, 'edit']);
Route::put('update-sirop/{id}', [SiropController::class, 'update']);
Route::delete('delete-sirop/{id}', [SiropController::class, 'destroy']);
// Route::get('sirops', 'SiropController@index');
// Route::get('sirops', 'SiropController@stockage')->name('sirops.stockage');




// // Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
// Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
