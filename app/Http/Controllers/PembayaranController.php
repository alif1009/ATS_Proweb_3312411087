<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // Data dummy sementara, bisa diganti dengan data dari database
        $pembayaran = [
            [
                'nama' => 'Petra',
                'kategori' => 'Bazar - Preloved',
                'tempat' => 'Auditorium',
                'barang' => 'Kamera',
                'status' => 'Lunas',
                'total' => 'Rp.200.000',
                'tanggal' => '21/12/2015',
            ],
        ];

        return view('pages.pembayaran', compact('pembayaran'));
    }
}
