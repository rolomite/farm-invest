<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');
    Route::post('/subscribe', SubscriptionController::class)->name('subscribe');

    Route::get('/deposit', [DepositController::class, 'create'])->name('deposit');
    Route::post('/deposit', [DepositController::class, 'store'])->name('deposit');
    Route::get('/deposit/{transaction}', [DepositController::class, 'show'])->name('deposit.show');
    Route::post('/deposit/upload', [DepositController::class, 'update'])->name('deposit.upload');

    Route::get('/withdraw', [WithdrawController::class, 'create'])->name('withdraw');
    Route::post('/withdraw', [WithdrawController::class, 'store'])->name('withdraw');
    Route::get('/withdraw/{transaction}', [WithdrawController::class, 'show'])->name('withdraw.show');

    Route::resource('transactions', TransactionController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
