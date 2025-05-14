<nav class="flex items-center justify-between bg-blue-800 p-4 text-white">
    <!-- Kiri -->
    <div class="flex-1">
        <a href="/" class="text-lg font-semibold">Logo</a>
    </div>

    <!-- Tengah -->
    <div class="flex-1 flex justify-center space-x-8">
        <!-- Dropdown Event -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="hover:text-blue-300">Kategori Event ▼</button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute top-full mt-2 bg-white text-black border rounded-md shadow-lg w-48 z-50">
                <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 hover:bg-gray-100">Bazar Preloved</a>
                <a href="{{ route('event.bazarmakanan') }}" class="block px-4 py-2 hover:bg-gray-100">Bazar Makanan</a>
                <!-- ... lanjut lainnya -->
            </div>
        </div>

        <!-- Dropdown Tempat -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="hover:text-blue-300">Tempat ▼</button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute top-full mt-2 bg-white text-black border rounded-md shadow-lg w-48 z-50">
                <a href="{{ route('venue.auditorium') }}" class="block px-4 py-2 hover:bg-gray-100">Auditorium</a>
                <a href="{{ route('venue.gedungtekno') }}" class="block px-4 py-2 hover:bg-gray-100">Gedung Tekno</a>
                <!-- ... -->
            </div>
        </div>

        <a href="{{ route('peralatan') }}" class="hover:text-blue-300">Peralatan</a>
        <a href="#" class="hover:text-blue-300">Riwayat pemesanan</a>
    </div>

    <!-- Kanan -->
    <div class="flex-1 flex justify-end">
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300">
                <span>👤 Profile (Mahasiswa)</span>
            </button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50 text-black">
                <a href="{{ route('profile.profil') }}" class="block px-4 py-2 hover:bg-gray-100">Profile Saya</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pengaturan</a>
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100">Log out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
