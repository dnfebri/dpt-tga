<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\PemilihController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

    // Route::get('/pemilih', [App\Http\Controllers\PemilihController::class, 'index'])->name('pemilih');
    // Route::get('/pemilih/create', [App\Http\Controllers\PemilihController::class, 'create'])->name('create.pemilih');
    Route::prefix('pemilih')->name('pemilih.')->middleware(['permission:read pemilih|cread pemilih'])->group(function () {
        Route::get('', [PemilihController::class, 'index'])->name('index');
        Route::get('/create', [PemilihController::class, 'create'])->name('create');
        Route::get('/import', [PemilihController::class, 'import'])->name('import')->middleware('role:admin');
        Route::get('/example', [PemilihController::class, 'example'])->name('example');
        // Route::get('/{pemilih}', [PemilihController::class, 'show'])->name('show');
        Route::post('', [PemilihController::class, 'store'])->name('store');
        Route::get('/{pemilih}/edit', [PemilihController::class, 'edit'])->name('edit')->middleware('role:admin');
        Route::put('/{pemilih}', [PemilihController::class, 'update'])->name('update');
        Route::delete('/{pemilih}/delete', [PemilihController::class, 'destroy'])->name('delete');
    });
    // Route::resource('pemilih', PemilihController::class);

    // DESA controller =====================================================================>>
    Route::prefix('desa')->name('desa.')->middleware(['role:admin'])->group(function () {
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

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('index')->withoutMiddleware('verified'); // User Publick
        Route::get('/change', [UserController::class, 'change'])->name('change')->withoutMiddleware('verified'); // User Publick
        Route::get('/showall', [UserController::class, 'showall'])->name('showall');
        Route::post('', [UserController::class, 'store'])->name('store')->withoutMiddleware('verified');  // User Publick
        Route::post('/editakun{user}', [UserController::class, 'editakun'])->name('editakun')->withoutMiddleware('verified');  // User Publick
        Route::get('/{user}/editrole', [UserController::class, 'editrole'])->name('editrole');
        Route::put('/{user}', [UserController::class, 'updaterole'])->name('updaterole');
    });
});
