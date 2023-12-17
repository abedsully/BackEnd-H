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

// Route::get('dashboard', function () {
//     return view('dashboard');
// });


// Untuk mengakses page Dashboard
Route::get('/dashboard', [BukuController::class, 'show']);

// Untuk mengakses page addBuku
Route::get('/add-buku', [BukuController::class, 'create']);

// Untuk proses storeBuku
Route::post('/store-buku', [BukuController::class, 'store']);

// Untuk mengakses page showDetail
Route::get('/detail-buku/{id}', [BukuController::class, 'showDetail']);

// Untuk mengakses page editBuku
Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);

// Untuk proses update Buku
Route::patch('/update-buku/{id}', [BukuController::class, 'update']);

// Untuk proses delete Buku
Route::delete('/delete-buku/{id}', [BukuController::class, 'destroy']);

