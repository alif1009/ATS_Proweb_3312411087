<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profile/profil', function () {
    return view('profile.profil');
})->name('profile.profil');
