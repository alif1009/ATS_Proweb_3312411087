<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        $venues = [
            [
                'nama' => 'Auditorium',
                'deskripsi' => 'Tempat indoor besar untuk seminar dan konser.',
                'gambar' => 'auditorium.jpg',
                'slug' => 'auditorium',
            ],
            [
                'nama' => 'Gedung Tekno',
                'deskripsi' => 'Gedung modern untuk seminar dan pameran teknologi.',
                'gambar' => 'gedungtekno.jpg',
                'slug' => 'gedungtekno',
            ],
            [
                'nama' => 'Lapangan',
                'deskripsi' => 'Area outdoor untuk festival dan bazar.',
                'gambar' => 'lapangan.jpg',
                'slug' => 'lapangan',
            ],
        ];

        return view('venue.index', compact('venues'));
    }

    public function show($slug)
    {
        $venues = [
            'auditorium' => [
                'nama' => 'Auditorium',
                'deskripsi' => 'Tempat indoor besar untuk seminar dan konser.',
                'gambar' => 'auditorium.jpg',
            ],
            'gedungtekno' => [
                'nama' => 'Gedung Tekno',
                'deskripsi' => 'Gedung modern untuk seminar dan pameran teknologi.',
                'gambar' => 'gedungtekno.jpg',
            ],
            'lapangan' => [
                'nama' => 'Lapangan',
                'deskripsi' => 'Area outdoor untuk festival dan bazar.',
                'gambar' => 'lapangan.jpg',
            ],
        ];

        if (!array_key_exists($slug, $venues)) {
            abort(404);
        }

        $venue = $venues[$slug];

        return view('venue.show', compact('venue'));
    }
}
