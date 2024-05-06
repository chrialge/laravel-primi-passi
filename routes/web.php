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

Route::get('/home', function () {

    $data = [
        'Home',
        'About',
        'Help',
        'Login'
    ];

    return view('home', compact('data'));
});

Route::get('/about', function () {

    $data = [
        'Home',
        'About',
        'Help',
        'Login'
    ];

    return view('about', compact('data'));
});

Route::get('/help', function () {

    $data = [
        'Home',
        'About',
        'Help',
        'Login'
    ];

    return view('help', compact('data'));
});

Route::get('/login', function () {

    $data = [
        'Home',
        'About',
        'Help',
        'Login'
    ];

    return view('login', compact('data'));
});
