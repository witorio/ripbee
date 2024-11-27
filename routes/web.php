<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WalletController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::get('/wallet', function () {
    return Inertia::render('Wallet/Wallet');
})->middleware(['auth', 'verified'])->name('wallet');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/buy', [ProductController::class, 'buy'])->middleware(['auth', 'verified'])->name('buy');
Route::get('/sell', [ProductController::class, 'buy'])->middleware(['auth', 'verified'])->name('sell'); //example only, whole endpoints is wrong
Route::get('/deposit', [WalletController::class, 'deposit'])->middleware(['auth', 'verified'])->name('deposit'); 
Route::get('/withdraw', [WalletController::class, 'withdraw'])->middleware(['auth', 'verified'])->name('withdraw'); 

Route::post('/transfer', [WalletController::class, 'update'])->middleware(['auth', 'verified'])->name('transfer.update'); 

Route::middleware('auth')->group(function () {
    Route::get('api/wallet-worth', [WalletController::class, 'fetchWalletWorth']);
});


require __DIR__.'/auth.php';
