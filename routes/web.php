<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [RentalController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/car', [CarController::class, 'index']);

// Route::get('/rental', [RentalController::class, 'indexrental']);
//Route::resource('/rental', [RentalController::class, 'show']);
Route::get('/rental/{car}', [RentalController::class, 'show'])->name('rental.show');;
Route::get('/rental/checkout/{car}', [RentalController::class, 'checkout'])->name('checkout');
Route::post('/process-checkout', [RentalController::class, 'processCheckout'])->name('process.checkout');
Route::post('/checkout', [RentalController::class, 'store']);

Route::get('/myprofile', [CustomerController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);