<a href="{{ $link ?? '#' }}" class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
    <img src="{{ asset('images/' . ($image ?? 'placeholder.jpg')) }}" alt="{{ $title ?? 'Alat' }}" class="w-full h-40 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold">{{ $title ?? 'Alat' }}</h2>
        <p class="text-yellow-600 font-medium mt-1">Rp {{ $price ?? 'xx.xx.xx' }}</p>
        <p class="text-sm text-gray-500">{{ $capacity ?? 'xx Pax' }}</p>
    </div>
</a>
