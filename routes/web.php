<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/summary', function () {
    return view('summary');
});

Route::get('/hometest', function () {
    return view('hometest');
});