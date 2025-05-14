<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function bazarPreloved() {
        return view('event.bazarpreloved');
    }

    public function bazarMakanan() {
        return view('event.bazarmakanan');
    }

    public function seminarMentality() {
        return view('event.seminarmentality');
    }

    public function seminarInformatika() {
        return view('event.seminarinformatika');
    }

    public function festivalBudaya() {
        return view('event.festivalbudaya');
    }

    public function festivalKonser() {
        return view('event.festivalkonser');
    }

    public function pameranSeni() {
        return view('event.pameranseni');
    }

    public function pameranProjek() {
        return view('event.pameranprojek');
    }
}
