<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('video-page');
Route::post('/video/getVideo', [App\Http\Controllers\VideoController::class, 'getVideo'])->name('getVideo');
