<?php

use App\Http\Controllers\BukuController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', [BukuController::class, 'show']);
Route::get('/add-buku', [BukuController::class, 'create']);

Route::post('/store-buku', [BukuController::class, 'store']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', [])
