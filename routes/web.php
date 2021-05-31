<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PemilihController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

// Route::get('/pemilih', [App\Http\Controllers\PemilihController::class, 'index'])->name('pemilih');
// Route::get('/pemilih/create', [App\Http\Controllers\PemilihController::class, 'create'])->name('create.pemilih');
Route::prefix('pemilih')->name('pemilih.')->middleware('auth')->group(function () {
    Route::get('', [PemilihController::class, 'index'])->name('index');
    Route::get('/create', [PemilihController::class, 'create'])->name('create');
    Route::get('/import', [PemilihController::class, 'import'])->name('import');
    Route::get('/example', [PemilihController::class, 'example'])->name('example');
    // Route::get('/{pemilih}', [PemilihController::class, 'show'])->name('show');
    Route::post('', [PemilihController::class, 'store'])->name('store');
    Route::get('/{pemilih}/edit', [PemilihController::class, 'edit'])->name('edit');
    Route::put('/{pemilih}', [PemilihController::class, 'update'])->name('update');
    Route::delete('/{pemilih}/delete', [PemilihController::class, 'destroy'])->name('delete');
});
// Route::resource('pemilih', PemilihController::class);

// DESA controller =====================================================================>>
Route::prefix('desa')->name('desa.')->middleware('auth')->group(function () {
    Route::get('', [DesaController::class, 'index'])->name('index');
    Route::get('/create', [DesaController::class, 'create'])->name('create');
    // Route::get('/{desa}', [DesaController::class, 'show'])->name('show');
    Route::post('', [DesaController::class, 'store'])->name('store');
    Route::get('/{desa}/edit', [DesaController::class, 'edit'])->name('edit');
    Route::put('/{desa}', [DesaController::class, 'update'])->name('update');
    Route::delete('/{desa}/delete', [DesaController::class, 'destroy'])->name('delete');
});
// OR ==>
// Route::resource('desa', DesaController::class);
// DESA controller Akhir ================================================================>>

Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('/change', [UserController::class, 'change'])->name('change');
    Route::post('', [UserController::class, 'store'])->name('store');
});
