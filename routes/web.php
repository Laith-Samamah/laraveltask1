<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;




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

// Route::resource("home", BookController::class);

Route::get('index', [BookController::class, 'index']);
Route::post('store', [BookController::class, 'store']);



Route::get('addBooks', function () {
    return view('addBooks');
});
