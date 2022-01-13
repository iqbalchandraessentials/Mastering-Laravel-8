<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/sign-in', [UserController::class ,'google'] )->name('google.sign-in');

Route::get('/auth/google/callback', [UserController::class ,'handleCallback'] )->name('handle.callback');


Route::middleware(['auth'])->group(function(){
    Route::get('/checkout/success', [ CheckoutController::class, 'success' ])->name('checkout.success');
    
    Route::get('/checkout/{camp:slug}', [ CheckoutController::class, 'create' ])->name('checkout');
    
    Route::post('/checkout/store/{camp}', [ CheckoutController::class, 'store' ])->name('checkout.store');
    
    Route::get('/checkout/invoice/{id}', [ CheckoutController::class, 'invoice' ])->name('checkout.invoice');
    Route::get('/dashboard', [ DashboardController::class, 'index' ])->name('dashboard');

});

require __DIR__.'/auth.php';
