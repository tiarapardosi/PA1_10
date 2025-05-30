<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Public Routes (Accessible to all)
Route::get('/about', [AboutController::class, 'About'])->name('About');
Route::get('/booking', [BookingController::class, 'Booking'])->name('Booking');
Route::get('/galeri', [GaleriController::class, 'Galeri'])->name('Galeri');
Route::get('/menu', [MenuController::class, 'Menu'])->name('Menu');
Route::get('/testimonials', [TestimonialController::class, 'indexPublic'])->name('testimonials.indexPublic');
Route::get('/contact', [ContactController::class, 'Contact'])->name('Contact');
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
Route::get('/reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
Route::post('/reservasi', [ReservasiController::class,'store'])->name('reservasi.store');
Route::get('/reservasi/{id}/edit', [ReservasiController::class,'edit'])->name('reservasi.edit');
Route::get('/reservasi/{id}', [ReservasiController::class,'show'])->name('reservasi.show');
Route::delete('/reservasi/{id}', [ReservasiController::class,'destroy'])->name('reservasi.destroy');
Route::put('/reservasi/{id}', [ReservasiController::class,'update'])->name('reservasi.update');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth'); // Gunakan middleware auth

// Testimonial routes untuk pengguna
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

// Route untuk resource testimonial untuk Admin (di dalam middleware group)
Route::group(['middleware' => ['auth', 'is_admin']], function () {
    Route::resource('admin/testimonials', TestimonialController::class)->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'store' => 'admin.testimonials.store',
        'show' => 'admin.testimonials.show',
        'edit' => 'admin.testimonials.edit',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
    ]);

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Contoh route lain untuk manajemen lapangan
    //Route::resource('admin/lapangan', App\Http\Controllers\LapanganController::class);

    //Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); //HAPUS ROUTE INI
});

Route::group(['middleware' => ['auth']], function () {
    // Route yang hanya bisa diakses oleh user yang sudah login
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.manageUsers');
    Route::get('/admin/Bookings', [AdminController::class, 'manageBookings'])->name('admin.manageBookings');
});
