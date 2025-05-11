<header   class="fixed top-0 left-0 w-full z-50 bg-white/0 backdrop-blur-none text-white px-6 py-4 flex justify-between items-center border-b border-white/20">
        <!-- Logo di kiri -->
        <div class="flex-1">
            <a href="/" class="font-bold hover:text-blue-500 text-2xl">Logo</a>
        </div>

        <div class="flex-1 flex justify-center space-x-8">
            <div class="flex items-center space-x-2">
                <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                    <!-- Trigger Dropdown -->
                    <button @click="open = !open"
                        class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                        Kategori Event<span class="ml-1">▼</span>
                    </button>
    
                    <!-- Dropdown Content -->
                    
            </div>
            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Tempat <span class="ml-1">▼</span>
                </button>

                <!-- Dropdown Content -->
               

            <div class="flex items-center space-x-2">
                <a  class="flex items-center font-semibold hover:text-blue-500">
                    Peralatan <!--<span class="ml-1">▼</span>-->
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500">
                    Riwayat pemesanan <!--<span class="ml-1">▼</span>-->
                </a>
            </div>
        </div>
        
        <div class="flex-1 flex justify-end space-x-4"></div>
            <!-- Search Bar -->
  <!--  <form action="#" method="GET" class="relative">
       <input type="text" name="query" placeholder="Search...." 
              class="border border-gray-300 rounded-lg py-1 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
       <button type="submit" class="absolute right-2 top-1.5 text-gray-500 hover:text-blue-500">
           🔍
       </button>
   </form>-->
<!-- Profil kanan -->
   <div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center space-x-2 bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M5.121 17.804A11.966 11.966 0 0012 20c2.21 0 4.28-.595 6.032-1.62a6.5 6.5 0 10-11.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <span>Profile(Mahasiswa)</span>
    </button>
    <!-- Dropdown Menu -->

</header>
