<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JlptClassController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});
// Student page
Route::get('/jlpt-preparation', [JlptClassController::class, 'preparationPage'])->name('jlpt.preparation');

// Admin page
Route::get('/jlpt-preparation-admin', [JlptClassController::class, 'index'])->name('jlpt.admin');

// Resource routes (CRUD)
Route::resource('jlpt-classes', JlptClassController::class);
