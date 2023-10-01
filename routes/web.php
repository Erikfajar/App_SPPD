<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SppdController;
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
    return view('auth.index');
})->name('login');
Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('sppd', SppdController::class);
        Route::resource('pegawai', PegawaiController::class);
        Route::get('/pdf-sppd/{id}', [PdfController::class, 'pdfSppd'])->name('pdf-sppd');
        Route::get('/print-sppd/{id}', [PdfController::class, 'printSppd'])->name('print-sppd');
        Route::get('/Print-pegawai', [PdfController::class, 'pdfPegawai'])->name('print-pegawai');
    }
);
