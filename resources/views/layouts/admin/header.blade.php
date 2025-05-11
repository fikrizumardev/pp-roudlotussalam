<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center">
            <button class="md:hidden text-gray-500 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h1 class="ml-4 text-xl font-semibold text-gray-800">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-4">
            {{-- <button class="text-gray-500 focus:outline-none">
                <i class="fas fa-bell text-xl"></i>
            </button>
            <button class="text-gray-500 focus:outline-none">
                <i class="fas fa-envelope text-xl"></i>
            </button> --}}
            <div class="relative">
                <button class="flex items-center focus:outline-none">
                    <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User">
                    <span class="ml-2 text-sm font-medium text-gray-700">John Doe</span>
                    <i class="ml-1 fas fa-chevron-down text-xs"></i>
                </button>
            </div>
        </div>
    </div>
</header>