<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Le Menu Caché',
        'title' => 'Home'
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        'name' => 'Le Menu Caché',
        'title' => 'Gallery'
    ]);
});

Route::get('/menu', function () {
    return view('menu', [
        'name' => 'Le Menu Caché',
        'title' => 'Menu'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Le Menu Caché',
        'title' => 'About'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
