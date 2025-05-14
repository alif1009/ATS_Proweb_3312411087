<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        // Bisa diisi data dari database nanti
        return view('pages.katalog');
    }
}
