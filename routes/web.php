<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients',App\Http\Controllers\ClientController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('employee', App\Http\Controllers\EmployeeController::class);
Route::resource('attendace', App\Http\Controllers\AttendanceController::class);
Route::resource('turn', App\Http\Controllers\TurnController::class);
Route::resource('food', App\Http\Controllers\FoodController::class);
Route::resource('ingredient', App\Http\Controllers\IngredientController::class);
Route::resource('payment', App\Http\Controllers\PaymentController::class);
Route::resource('reservation', App\Http\Controllers\ReservationController::class);
Route::resource('table', App\Http\Controllers\TableController::class);
Route::resource('depot', App\Http\Controllers\DepotController::class);
Route::resource('dishingredient', App\Http\Controllers\DishingredientController::class);
