<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Tentang Saya
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Proyek
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

// Kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Halaman form kontak
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');

// Route untuk menyimpan data form kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Skills

Route::get('/skills', [SkillController::class, 'index'])->name('skills');

// Project
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
