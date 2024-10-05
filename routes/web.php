<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout.app');
});

Route::get('/institute-add', function () {
    return view('Institutes.add');
})->name('institute.add');

Route::get('/institute-list', function () {
    return view('Institutes.list');
})->name('institute.list');

Route::get('/admission-new', function () {
    return view('Admission.add');
})->name('admission.add');