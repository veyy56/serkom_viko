<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('/home');
});

Route::get('/home', [BookingController::class, 'home'])->name('home');
Route::get('/about',[BookingController::class, 'about'])->name('about');
Route::get('/transaksi/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::get('/form', [BookingController::class, 'create'])->name('create');
Route::post('/form', [BookingController::class, 'store'])->name('form.store');
Route::get('/standart', [BookingController::class, 'standart'])->name('standart');
Route::get('/Deluxe', [BookingController::class, 'deluxe'])->name('deluxe');
Route::get('/executive', [BookingController::class, 'familly'])->name('familly');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/room-stats', [ReservationController::class, 'roomStats'])->name('reservations.room-stats');
