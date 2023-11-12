<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/contact/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contacts.show');

    Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');

    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contacts.update');

    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

require __DIR__.'/auth.php';
