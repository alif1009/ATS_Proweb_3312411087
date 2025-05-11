<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GedungTeknoController extends Controller
{
    public function show()
    {
        return view('pages.detail-gedungtekno');
    }
}