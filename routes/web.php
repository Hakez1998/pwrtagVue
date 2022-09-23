<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PwrtagController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return view('login');
})->name('logout');

Route::get('/admin', [PwrtagController::class, 'getUsersData'])->middleware('auth')->name('admin');

Route::post('/register', [PwrtagController::class, 'register']);

Route::post('/signin', [PwrtagController::class, 'login']);

Route::post('/ticket', [PwrtagController::class, 'checkTicket']);

Route::get('/ticket/{id}', function ($id) {
    return view('tailwindpdf')->with(['data' => \App\Models\Event::find($id)]);
})->name('ticket');