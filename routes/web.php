<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

// pizza routes
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');  
Route::get('/orders/pizzas/create', [PizzaController::class, 'showCreate'])->name('pizzas.create');
Route::post('pizzas', [PizzaController::class, 'store'])->name('pizzas.store');  
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth')->name('pizzas.show');  
Route::delete('/pizzas/{id}', [PizzaController::class, 'delete'])->name('pizzas.delete')->middleware('auth'); 

Auth::routes();
// //this disables the "register option"
// Auth::routes([
//   'register' => false
// ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
