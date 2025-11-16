<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contacts', function () {
    return view('pages.contacts');
});
