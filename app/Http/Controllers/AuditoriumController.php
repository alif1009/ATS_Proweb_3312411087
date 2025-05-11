<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditoriumController extends Controller
{
    public function show()
    {
        return view('pages.detail-auditorium');
    }
}
