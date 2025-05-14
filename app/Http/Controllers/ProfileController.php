<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Di sini bisa menambahkan logika untuk mengambil data profile dari database
        return view('profile.profil');
    }
}
