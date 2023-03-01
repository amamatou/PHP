<?php

use Illuminate\Support\Facades\Route;

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
    return view('test2');

})->name('/');
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;

route::resource('categories',CategorieController::class);
route::resource('produits',ProduitController::class);