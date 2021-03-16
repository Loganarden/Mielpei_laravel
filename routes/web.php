<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProducteurController;


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

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('produits',ProduitController::class);

Route::get('/',[ProduitController::class,'index']);
Route::get('/produit/{id}',[ProduitController::class,'show'])->name('produits.show');
Route::get('/ajouterproduit',[ProduitController::class,'create']);
Route::post('/ajouterproduit',[ProduitController::class,'store']);


Auth::routes();

Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('admin');
Route::get('/producteur',[ProducteurController::class,'index'])->name('producteur')->middleware('producteur');
Route::get('/user',[UserController::class,'index'])->name('user')->middleware('user');

Route::get('/inscription_admin',[AdminController::class,'create']);
Route::post('/inscription_admin',[AdminController::class,'store']);

Route::get('/inscription_producteur',[ProducteurController::class,'create']);
Route::post('/inscription_producteur',[ProducteurController::class,'store']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

