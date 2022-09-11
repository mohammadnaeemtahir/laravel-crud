<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('home');
});

Route::group(['prefix' => 'customer'], function(){
    Route::get('', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/view', [CustomerController::class, 'view'])->name('customer.view');
    Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
