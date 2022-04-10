<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;
use App\Http\Controllers\FruitListController;

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

//Liste fruit
Route::get('ListFruit', function () {
    return view('ListFruit');
});

Route::get('ListFruit', [FruitList::class, 'index']);
Route::get('add-fruit', [FruitList::class, 'creation']);
Route::post('add-fruit',[FruitList::class, 'stockage']);




// // Route::resource('/management/category',[\App\Http\Controllers\management\categoryController ::class, 'createCategory']);
// Route::resource('/management/category',"\App\Http\Controllers\management\categoryController");


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
