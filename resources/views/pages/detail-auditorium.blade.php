@extends('layout.auditorium')
@section('title', 'Detail Auditorium')

@section('content')
<section class="relative bg-cover bg-center min-h-[90vh] flex items-center"
         style="background-image: url('{{ asset('images/auditorium-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 flex flex-col md:flex-row justify-between w-full px-10 py-10">
        <!-- Keterangan Auditorium -->
        <div class="text-white max-w-2xl py-10">
            <h1 class="text-5xl font-bold mb-4">Auditorium</h1>
            <div class="text-yellow-500 text-2xl font-semibold mb-2 flex items-center gap-2">
                Rp xxx.xxx
                <span class="text-white flex items-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>9999 Pax
                </span>
            </div>
            <p class="mb-1">Polteknik Negeri Batam</p>
            <p class="mb-4">Batam, Kepulauan 29439</p>
            <p class="text-yellow-300 mb-6">
                Tersedia penawaran khusus untuk 50, 100, 200 Pax.<br>
                Kontak tim kami untuk info lebih lanjut.
            </p>
            <div class="flex gap-4">
                <a href="{{ url('pemesanan') }}"
                   class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">Pesan</a>
                <a href="https://wa.me/6295183128564" target="_blank"
                   class="bg-green-600 px-6 py-2 rounded-full text-white hover:bg-green-700 transition">Chat by Whatsapp</a>
            </div>
        </div>

        <!-- Galeri Gambar -->
        <div class="grid grid-cols-2 gap-2 mt-10 md:mt-0 md:ml-10 max-w-md">
            <img src="https://www.polibatam.ac.id/wp-content/uploads/2021/12/IMG_5048-scaled.jpg"
                 class="rounded-2xl w-90 h-auto object-cover col-span-2 transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-100">
            <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/10/Kuliah-Umum-BI-1.jpg"
                 class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-200">
            <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/08/Inagurasi-MABA-2022-scaled.jpg"
                 class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-300">
        </div>
    </div>
</section>
@endsection
