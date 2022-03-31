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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('info', function () {
    return phpinfo();
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/sendfiles', function () {
    return view('sendfiles');
})->name('sendfiles');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');