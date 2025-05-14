@extends('layout.peralatan')

@section('title', 'Katalog Peralatan')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <a href="/kamera" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/kamera.jpg') }}" alt="Kamera" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Kamera</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/panggung" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/panggung.jpg') }}" alt="Panggung" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Panggung</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/sound-system" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/soundsistem.jpg') }}" alt="Sound System" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Sound System</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/stand-bazar" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/standbazar.jpg') }}" alt="Stand Bazar" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Stand Bazar</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/tripod" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/tripod.jpg') }}" alt="Tripod" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Tripod</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/lighting" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/lampu.jpg') }}" alt="Lighting" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Lighting</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/tenda" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/tenda.jpeg') }}" alt="Tenda" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Tenda</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>

    <a href="/speaker" class="bg-white rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
        <img src="{{ asset('images/speaker.png') }}" alt="Speaker" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-900">Speaker</h2>
            <p class="text-yellow-700 font-medium mt-1">Rp xx.xx.xx</p>
            <p class="text-sm text-gray-600">xx Pax</p>
        </div>
    </a>
</div>
@endsection
