<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');

Route::get('/notifikasi', function () {
    return view('notifikasi');
})->name('notifikasi');

// ADMIN
Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
})->name('dashboard-admin');

Route::get('/templateletter', function () {
    return view('templateletter');
})->name('templateletter');

Route::get('/notifikasi-admin', function () {
    return view('notifikasi-admin');
})->name('notifikasi-admin');

Route::get('/approved-admin', function () {
    return view('approved-admin');
})->name('approved-admin');

// DOSEN / KAPRODI / DEKAN
Route::get('/dashboard-sub', function () {
    return view('dashboard-sub');
})->name('dashboard-sub');

Route::get('/notifikasi-sub', function () {
    return view('notifikasi-sub');
})->name('notifikasi-sub');

Route::get('/approved-sub', function () {
    return view('approved-sub');
})->name('approved-sub');
