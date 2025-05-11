<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditoriumController;
use App\Http\Controllers\GedungTeknoController;

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profile/profil', function () {
    return view('profile.profil');
})->name('profile.profil');

Route::get('/auditorium', [AuditoriumController::class, 'show']);
Route::get('/gedungtekno', [GedungteknoController::class, 'show']);

Route::get('/festivalkonser', function () {
    return view('pages.festivalkonser');
})->name('festivalkonser');

Route::get('/festivalbudaya', function () {
    return view('pages.festivalbudaya');
    
})->name('festivalbudaya');
