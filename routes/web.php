<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

// Route::get('/', function () {
//     return view('store.index');
// });

Route::get('/', [StoreController::class, 'index'])->name('store.index');

Route::get('/create', [StoreController::class, 'create'])->name('store.create');

Route::post('/store', [StoreController::class, 'store'])->name('store.store');
