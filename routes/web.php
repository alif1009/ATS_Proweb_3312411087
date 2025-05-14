<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditoriumController;
use App\Http\Controllers\GedungTeknoController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembayaranController;

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

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');

Route::prefix('event')->name('event.')->group(function () {
    Route::get('/bazarpreloved', [EventController::class, 'bazarPreloved'])->name('bazarpreloved');
    Route::get('/bazarmakanan', [EventController::class, 'bazarMakanan'])->name('bazarmakanan');
    Route::get('/seminarmentality', [EventController::class, 'seminarMentality'])->name('seminarmentality');
    Route::get('/seminarinformatika', [EventController::class, 'seminarInformatika'])->name('seminarinformatika');
    Route::get('/festivalbudaya', [EventController::class, 'festivalBudaya'])->name('festivalbudaya');
    Route::get('/festivalkonser', [EventController::class, 'festivalKonser'])->name('festivalkonser');
    Route::get('/pameranseni', [EventController::class, 'pameranSeni'])->name('pameranseni');
    Route::get('/pameranprojek', [EventController::class, 'pameranProjek'])->name('pameranprojek');
});

Route::prefix('venue')->name('venue.')->group(function () {
    Route::get('/auditorium', [VenueController::class, 'auditorium'])->name('auditorium');
    Route::get('/gedungtekno', [VenueController::class, 'gedungtekno'])->name('gedungtekno');
    Route::get('/lapangan', [VenueController::class, 'lapangan'])->name('lapangan');
});

Route::get('/peralatan', [PeralatanController::class, 'index'])->name('peralatan');

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.profil');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');