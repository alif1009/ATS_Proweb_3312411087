@extends('layout.peralatan')

@section('title', 'Daftar Peralatan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Daftar Peralatan</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {{-- Contoh peralatan --}}
        <div class="bg-white rounded-xl shadow-md p-4">
            <h2 class="text-xl font-semibold">Proyektor</h2>
            <p class="text-gray-600">Tersedia 3 unit, bisa dipakai untuk presentasi atau seminar.</p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-4">
            <h2 class="text-xl font-semibold">Sound System</h2>
            <p class="text-gray-600">Speaker, mixer, dan mikrofon lengkap untuk keperluan acara besar.</p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-4">
            <h2 class="text-xl font-semibold">Tenda Lipat</h2>
            <p class="text-gray-600">Cocok untuk acara luar ruangan seperti bazar atau pameran.</p>
        </div>

        {{-- Tambahkan lebih banyak item di sini --}}
    </div>
</div>
@endsection
