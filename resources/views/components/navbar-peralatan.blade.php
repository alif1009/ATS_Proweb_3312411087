<nav class="flex items-center justify-between bg-blue-800 p-4">
    <!-- Logo sebelah kiri -->
    <div class="flex-1">
        <a href="/" class="font-bold hover:text-blue-500 text-2xl">Logo</a>
    </div>

    <!-- Menu navigasi utama di tengah -->
    <div class="flex-1 flex justify-center space-x-8">
        <!-- Dropdown Kategori Event -->
        <div x-data="{ open: false }" class="relative flex items-center space-x-2">
            <button @click="open = !open"
                class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                Kategori Event <span class="ml-1">▼</span>
            </button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute top-full mt-2 bg-white border rounded-md shadow-lg w-48 z-50 text-black">
                <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 hover:bg-gray-100">Bazar Preloved</a>
                <a href="{{ route('event.bazarmakanan') }}" class="block px-4 py-2 hover:bg-gray-100">Bazar Makanan</a>
                <a href="{{ route('event.seminarmentality') }}" class="block px-4 py-2 hover:bg-gray-100">Seminar Mentality</a>
                <a href="{{ route('event.seminarinformatika') }}" class="block px-4 py-2 hover:bg-gray-100">Seminar Informatika</a>
                <a href="{{ route('event.festivalbudaya') }}" class="block px-4 py-2 hover:bg-gray-100">Festival Budaya</a>
                <a href="{{ route('event.festivalkonser') }}" class="block px-4 py-2 hover:bg-gray-100">Festival Konser</a>
                <a href="{{ route('event.pameranseni') }}" class="block px-4 py-2 hover:bg-gray-100">Pameran Seni</a>
                <a href="{{ route('event.pameranprojek') }}" class="block px-4 py-2 hover:bg-gray-100">Pameran Projek</a>
            </div>
        </div>

        <!-- Dropdown Tempat -->
        <div x-data="{ open: false }" class="relative flex items-center space-x-2">
            <button @click="open = !open"
                class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                Tempat <span class="ml-1">▼</span>
            </button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute top-full mt-2 bg-white border rounded-md shadow-lg w-48 z-50 text-black">
                <a href="{{ route('venue.auditorium') }}" class="block px-4 py-2 hover:bg-gray-100">Auditorium</a>
                <a href="{{ route('venue.gedungtekno') }}" class="block px-4 py-2 hover:bg-gray-100">Gedung Tekno</a>
                <a href="{{ route('venue.lapangan') }}" class="block px-4 py-2 hover:bg-gray-100">Lapangan</a>
            </div>
        </div>

        <!-- Menu Lain -->
        <a href="{{ route('peralatan') }}" class="font-semibold hover:text-blue-500">Peralatan</a>
        <a href="#" class="font-semibold hover:text-blue-500">Riwayat Pemesanan</a>
    </div>

    <!-- Kanan: Profil -->
    <div class="flex-1 flex justify-end space-x-4">
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="flex items-center space-x-2 bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A11.966 11.966 0 0012 20c2.21 0 4.28-.595 6.032-1.62a6.5 6.5 0 10-11.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Profile (Mahasiswa)</span>
            </button>
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50 text-black">
                <a href="{{ route('profile.profil') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Profile Saya</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Pengaturan</a>
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                        Log out
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
