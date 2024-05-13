<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\TandanbuahController;
use App\Http\Controllers\AnalisaSawitController;
use App\Http\Controllers\LaporanHarianController;
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
 
Route::middleware('auth', 'active')->group(function () {
    Route::middleware('direktur', 'su')->group(function () {
    });
    Route::middleware('admin','su','direktur')->group(function () {
        Route::get('/user/{id}/active', [UserController::class, 'active']);
        Route::resource('user', UserController::class)->names(['index' => 'user']);
    }); 
    Route::middleware('operator','su','direktur')->group(function () {
        Route::get('/export/laporan-harian',[ExcelController::class, 'laporanharian'])->name('export-laporan');

        Route::resource('inventaris', InventarisController::class)->names(['index' => 'inventaris']);
        Route::resource('data-minyak-sawit', DataMinyakSawitController::class)->names(['index' => 'data-minyak-sawit']);
        Route::resource('tandan-buah', TandanbuahController::class)->names(['index' => 'tandan-buah']);
        Route::resource('data-inti-sawit', DataMinyakIntiSawitController::class)->names(['index' => 'data-inti-sawit']);
        Route::resource('laporan-harian', LaporanHarianController::class)->names(['index' => 'laporan-harian']);
        Route::resource('analisa', AnalisaSawitController::class)->names(['index' => 'analisa']);
        Route::get('/inventaris/category/create', [InventarisController::class, 'inventaris_create']);
        Route::post('/inventaris/category/create', [InventarisController::class, 'inventaris_create_submit']);
        Route::get('/export/inventaris', [ExcelController::class, 'inventaris']);
        Route::get('/export/analisa', [ExcelController::class, 'analisasawit']);
        Route::get('/export/tandan-buah', [ExcelController::class, 'tandanbuah']);
    });
    Route::middleware('operator','su','direktur','admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }); 
});
Route::get('/', function(){  

    require redirect('/login');
});
require __DIR__.'/auth.php';
