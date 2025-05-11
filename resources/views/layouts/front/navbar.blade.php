
<!-- Navbar -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="{{ route('front.homepage') }}">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo-ponpes.png') }}" width="8%" alt="">
                        <span class="ml-2 text-xl font-bold text-green-600">Ponpes Roudlotussalam</span>
                    </div>
                </div>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('front.homepage') }}" class="text-green-600 font-medium hover:text-green-600">Beranda</a>
                <a href="{{ route('front.about') }}" class="text-gray-600 hover:text-green-600">Profil</a>
                <a href="{{ route('front.articles') }}" class="text-gray-600 hover:text-green-600">Artikel</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Donasi</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Fasilitas</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Kontak</a>
                <a href="#" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition duration-300">Login</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-50">
        <div class="flex justify-end p-4">
            <button id="menu-close" class="text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-start space-y-4 px-6 py-4">
            <a href="{{ route('front.homepage') }}" class="text-green-600 font-medium hover:text-green-600">Beranda</a>
            <a href="{{ route('front.about') }}" class="text-gray-600 hover:text-green-600">Profil</a>
            <a href="{{ route('front.articles') }}" class="text-gray-600 hover:text-green-600">Artikel</a>
            <a href="#" class="text-gray-600 hover:text-green-600">Donasi</a>
            <a href="#" class="text-gray-600 hover:text-green-600">Fasilitas</a>
            <a href="#" class="text-gray-600 hover:text-green-600">Kontak</a>
            <a href="#" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition duration-300">Login</a>
        </div>
    </div>
</nav>