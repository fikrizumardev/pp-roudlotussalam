<!-- Sidebar -->
<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-green-800 text-white">
        <div class="flex items-center justify-center h-16 px-4 bg-green-900">
            <span class="text-xl font-bold">Admin<span class="text-green-300">Panel</span></span>
        </div>
        <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
            <nav class="flex-1 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-green-700 text-white">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-users mr-3"></i>
                    Data Santri
                </a>
                <a href="{{ route('admin.article.index') }}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-newspaper mr-3"></i>
                    Artikel
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-donate mr-3"></i>
                    Program Donasi
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-file-alt mr-3"></i>
                    Rekap Keuangan
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-list mr-3"></i>
                    Inventaris Aset
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-users mr-3"></i>
                    Manajemen User
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg text-green-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-cog mr-3"></i>
                    Pengaturan
                </a>
            </nav>
            <div class="mt-auto pb-4">
                <div class="px-4 py-3 bg-green-700 rounded-lg">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User">
                        <div class="ml-3">
                            <p class="text-sm font-medium">John Doe</p>
                            <p class="text-xs text-green-200">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>