<?php

use App\Http\Controllers\DeteksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::get('/tentang', fn () => view('tentang'))->name('tentang');

Route::get('/deteksi', [DeteksiController::class, 'form'])->name('deteksi');
Route::post('/hasil-deteksi', [DeteksiController::class, 'prosesData'])->name('deteksi.proses');
Route::get('/riwayat', [DeteksiController::class, 'riwayat'])->name('riwayat');
