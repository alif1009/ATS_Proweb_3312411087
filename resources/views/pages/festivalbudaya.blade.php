@extends('layout.festivalbudaya')

@section('title', 'Festival Budaya')

@section('content')
<section class="relative">
        <!-- Background -->
         <img src="{{ asset('images/backgroundfestival2.jpg') }}" alt="Hero Image" class="w-full h-[600px] object-cover">
<!-- Teks Seminar -->
<div class="absolute top-13 left-25 text-white">
            <h2 class="text-7xl font-bold">Lantera Festival Night</h2>
            <p class="text-8xl">Festival Budaya</p>
            <p class="text-2xl">Available from</p>
            <p class="text-yellow-500 text-2xl font-semibold">Rp xxx.xxx</p>
            <div class="flex gap-4 mt-4">
          <a href="#" class="bg-white text-gray-800 px-6 py-2 rounded shadow hover:bg-gray-200">Pesan</a>
          <a href="https://wa.me/62xxxxxxxxx" target="_blank" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Chat by Whatsapp</a>
        </div>
        </div>
      </section>
    </div>
    
<!-- Detail Section -->
<section class="max-w-3xl mx-auto mt-15 px-5">
  <div class="bg-white rounded-2xl shadow-lg p-10 border border-gray-100">
    
    <!-- Header Tab -->
    <div class="bg-gray-300 rounded-tl-xl px-8 py-2 inline-block mb-5">
      <h2 class="text-lg font-semibold text-gray-800">Detail</h2>
    </div>
    
    <!-- Description -->
    <p class="text-gray-600 text-sm mb-4">
      Berikut Peralatan dan pelayanan yang akan didapatkan dari awal hingga akhir acara seminar :
    </p>

    <!-- Daftar Item -->
    <div class="space-y-4 text-sm text-gray-700">
    <div>
        <p class="font-semibold text-gray-800">Peralatan Panggung :</p>
        <ul class="list-disc list-inside text-gray-500">
          <li>Panggung</li>
          <li>Sound Sytem</li>
          <li>Lighting System</li>
          <li>Truss & Rigging ( untuk gantung layar, lampu, banner )</li>
        </ul>
      </div>
      <div>
        <p class="font-semibold text-gray-800">Visual :</p>
        <ul class="list-disc list-inside text-gray-500">
          <li>Layar LED</li>
          <li>Kamera</li>
          <li>Video mixer & switcher</li>
        </ul>
      </div>
      <div>
        <p class="font-semibold text-gray-800">Infrastuktur :</p>
        <ul class="list-disc list-inside text-gray-500">
          <li>Barrier</li>
          <li>Tenda / Kanopi</li>
          <li>Toilet Portable</li>
          <li>Kursi & Meja lipat</li>
        </ul>
      </div>
      <div>
        <p class="font-semibold text-gray-800">Operasional & Keamanan :</p>
        <ul class="list-disc list-inside text-gray-500">
          <li>HT</li>
          <li>Tali Pembatas  Signage</li>
          <li>APAR</li>
          <li>P3K</li>
          <li>Id Card / Lanyard Crew & Backstage Pass</li>
        </ul>
      </div>

  </div>
</section>
@endsection