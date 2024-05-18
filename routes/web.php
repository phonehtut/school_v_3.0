<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
    return view('form');
})->name('/');

Route::get('courses', function() {
    return view('course');
})->name('course');

Route::controller(StudentController::class)->group(function () {
    Route::get('register', 'index')->name('student.index');
    Route::post('register', 'create')->name('student.register');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index')->name('contact.index');
    Route::post('contact', 'create')->name('contact.create');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
