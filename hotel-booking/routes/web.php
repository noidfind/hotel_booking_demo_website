<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AdminController;

// Otel listesi route'u
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');

// Otel ekleme formu
Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');

// Otel kaydetme işlemi
Route::post('/hotels', [HotelController::class, 'store'])->name('hotels.store');

// Otel silme işlemi
Route::delete('/hotels/{id}', [HotelController::class, 'destroy'])->name('hotels.destroy');

// Otel güncelleme formu
Route::get('/hotels/{id}/edit', [HotelController::class, 'edit'])->name('hotels.edit');

// Otel güncelleme işlemi
Route::put('/hotels/{id}', [HotelController::class, 'update'])->name('hotels.update');

Route::get('/', function () {
    return redirect('/main-menu');
});

Route::get('/main-menu', function () {
    return view('main-menu');
});

Route::get('/oteller', [HotelController::class, 'index']);

Route::get('/hakkimizda', function () {
    return view('about');
});

Route::get('/iletisim', function () {
    return view('contact');
});

Route::get('/kayit', function () {
    return view('auth.register');
});

Route::get('/kampanyalar', function () {
    return view('kampanyalar');
});

// Admin routes
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');