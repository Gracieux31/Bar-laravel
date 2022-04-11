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

Route::get(
    'sirops',
    [SiropsController::class, 'index']
)->name('sirops.show');
