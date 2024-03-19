<?php
// Mengimpor kelas yang diperlukan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

// Tentukan rute untuk operasi terkait pengguna
Route::post('/register', [UserController::class, 'register']); // Daftarkan pengguna baru
Route::post('/login', [UserController::class, 'login']); // Masuk pengguna
Route::put('/users/{id}', [UserController::class, 'update']); // Perbarui informasi pengguna
Route::get('/users/{id}', [UserController::class, 'show']); // Dapatkan detail pengguna
Route::post('/logout', [UserController::class, 'logout']); // Keluar pengguna

// Tentukan rute untuk operasi terkait kontak
Route::post('/contacts', [ContactController::class, 'create']); // Buat kontak baru
Route::put('/contacts/{id}', [ContactController::class, 'update']); // Perbarui informasi kontak
Route::get('/contacts/{id}', [ContactController::class, 'show']); // Dapatkan detail kontak
Route::post('/contacts/search', [ContactController::class, 'search']); // Cari kontak
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']); // Hapus kontak

// Tentukan rute untuk operasi terkait alamat
Route::post('/addresses', [AddressController::class, 'create']); // Buat alamat baru
Route::put('/addresses/{id}', [AddressController::class, 'update']); // Perbarui informasi alamat
Route::get('/addresses/{id}', [AddressController::class, 'show']); // Dapatkan detail alamat
Route::get('/addresses', [AddressController::class, 'index']); // Dapatkan daftar alamat
Route::delete('/addresses/{id}', [AddressController::class, 'destroy']); // Hapus alamat
