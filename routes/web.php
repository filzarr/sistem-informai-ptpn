<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\AnalisaSawitController;
use App\Http\Controllers\DataMinyakSawitController;
use App\Http\Controllers\DataMinyakIntiSawitController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('inventaris', InventarisController::class)->middleware(['auth', 'verified'])->names(['index' => 'inventaris']);
Route::resource('data-minyak-sawit', DataMinyakSawitController::class)->middleware(['auth', 'verified'])->names(['index' => 'data-minyak-sawit']);
Route::resource('data-inti-sawit', DataMinyakIntiSawitController::class)->middleware(['auth', 'verified'])->names(['index' => 'data-inti-sawit']);
Route::resource('analisa', AnalisaSawitController::class)->middleware(['auth', 'verified'])->names(['index' => 'analisa']);
Route::resource('user', UserController::class)->middleware(['auth', 'verified'])->names(['index' => 'user']);
Route::get('/inventaris/category/create', [InventarisController::class, 'inventaris_create']);
Route::post('/inventaris/category/create', [InventarisController::class, 'inventaris_create_submit']);
Route::get('/export/inventaris', [ExcelController::class, 'inventaris']);
Route::get('/export/analisa', [ExcelController::class, 'analisasawit']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
