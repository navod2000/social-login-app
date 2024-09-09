<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PageController;

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
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // New Routes
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');
});

Route::get('auth/google',[GoogleController::class,'googlepage']);

Route::get('auth/google/callback',[GoogleController::class,'googlecallback']);
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

// routes/web.php

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');

