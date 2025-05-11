<div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-green-600 to-yellow-500 text-white py-20">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url({{ asset('img/header.jpg') }});"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Membentuk Generasi Santri Berakhlak Mulia</h1>
                    <p class="text-xl mb-8">Pondok Pesantren Roudlotussalam menyelenggarakan pendidikan terpadu antara ilmu agama dan umum dengan lingkungan yang islami.</p>
                    <!-- <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="bg-green-600 text-green-600 font-bold px-6 py-3 rounded-md text-center hover:bg-yellow-500 transition duration-300">Daftar Sekarang</a>
                        <a href="#" class="border-2 border-white px-6 py-3 rounded-md text-center hover:bg-white hover:text-green-600 transition duration-300">Virtual Tour</a>
                    </div> -->
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('img/logo-ponpes.png') }}" alt="Logo Pondok Pesantren" class="rounded-lg w-1/2">
                </div>
            </div>
        </div>
    </section>

    <!-- Program Unggulan Section -->
    <section id="program" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Unggulan</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                <p class="max-w-2xl mx-auto text-gray-600 mt-4">Program unggulan yang dirancang untuk membentuk santri yang berilmu dan berakhlak.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Kotak 1 - Tahfidz -->
                <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 h-full flex flex-col">
                    <div class="bg-green-600 bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Tahfidz Al-Qur'an 30 Juz</h3>
                    <p class="text-gray-600 text-center">Sanad dari As-Syaikh KH. Arwani Amin Kudus</p>
                </div>
                
                <!-- Kotak 2 - Kitab Kuning -->
                <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 h-full flex flex-col">
                    <div class="bg-green-600 bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Metodologi Cepat Belajar Baca Kitab Kuning</h3>
                    <p class="text-gray-600 text-center">(Kitab Gundul / Tanpa Harokat) 1 Tahun Lancar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">200+</div>
                    <div class="text-gray-600">Santri</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">10+</div>
                    <div class="text-gray-600">Asatidz</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">5+</div>
                    <div class="text-gray-600">Fasilitas</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">5+</div>
                    <div class="text-gray-600">Program</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="article-section" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Artikel Terbaru</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                <p class="max-w-2xl mx-auto text-gray-600 mt-4">Informasi dan pengetahuan terbaru seputar pendidikan islam dan kegiatan pesantren</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Artikel 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>15 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span>Pendidikan</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Metode Efektif Menghafal Al-Qur'an untuk Pemula</h3>
                        <p class="text-gray-600 mb-4">Temukan teknik-teknik terbaik untuk memulai perjalanan menghafal Al-Qur'an dengan mudah dan menyenangkan.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-600 transition duration-300">Baca Selengkapnya →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1566669437684-50d0d0b3d26b?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Artikel 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>10 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span>Kegiatan</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Pekan Muhadharah: Melatih Mental Santri Berbicara di Publik</h3>
                        <p class="text-gray-600 mb-4">Kegiatan rutin pekanan yang melatih santri untuk berani berbicara di depan umum dengan materi keislaman.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-600 transition duration-300">Baca Selengkapnya →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Artikel 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>5 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span>Tips</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Mengatur Waktu Belajar yang Seimbang antara Ilmu Agama dan Umum</h3>
                        <p class="text-gray-600 mb-4">Panduan praktis bagi santri untuk mengoptimalkan waktu belajar tanpa mengabaikan salah satu aspek pendidikan.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-600 transition duration-300">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-blue-800 transition duration-300">Lihat Semua Artikel</a>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Bersama Bangun Masa Depan Pesantren</h2>
                <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                <p class="max-w-2xl mx-auto text-gray-600 mt-4">Dukung pembangunan fasilitas Pondok Pesantren Roudlotussalam untuk menciptakan lingkungan belajar yang lebih baik bagi santri.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Campaign Info -->
                <div class="flex flex-col justify-center">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Program Donasi Pembangunan</h3>
                    <p class="text-gray-600 mb-6">Mari bersama wujudkan lingkungan belajar yang kondusif bagi para santri melalui pembangunan asrama dan ruang kelas baru di pesantren kami. Setiap donasi Anda akan membantu mewujudkan pendidikan berkualitas bagi generasi mendatang.</p>
                    <div class="mb-6">
                        <div class="text-lg font-semibold text-green-600">Progres Donasi</div>
                        <div class="w-full bg-gray-200 rounded-full h-4 mt-2">
                            <div class="bg-green-600 h-4 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="text-gray-600 mt-2">Terkumpul: Rp 600.000.000 dari Rp 1.000.000.000</p>
                    </div>
                    <a href="#" class="inline-block bg-green-600 text-white font-bold px-6 py-3 rounded-md hover:bg-yellow-500 transition duration-300">Donasi Sekarang</a>
                </div>
                <!-- Campaign Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('img/campaign-1.jpeg') }}" alt="Pembangunan Pesantren" class="rounded-lg shadow-md w-full max-w-md object-cover">
                </div>
            </div>
            <!-- Target Donasi -->
            <div class="mt-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Target Donasi Diperuntukkan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
                    <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 h-full flex flex-col">
                        <div class="bg-green-600 bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <i class="fa-solid fa-building text-2xl text-green-600 text-center"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Pembangunan Asrama Baru</h3>
                        <p class="text-gray-600 text-center">Membangun asrama dengan kapasitas lebih besar untuk menampung lebih banyak santri dengan lingkungan yang nyaman.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 h-full flex flex-col">
                        <div class="bg-green-600 bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <i class="fa-solid fa-users text-2xl text-green-600 text-center"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Ruang Kelas</h3>
                        <p class="text-gray-600 text-center">Membangun ruang kelas baru yang dilengkapi fasilitas pendukung untuk pembelajaran interaktif.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 h-full flex flex-col">
                        <div class="bg-green-600 bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 text-center">Peningkatan Kualitas Pendidikan</h3>
                        <p class="text-gray-600 text-center">Implementasi alat pembelajaran modern, dan program pengembangan kurikulum untuk pendidikan yang lebih baik.</p>
                    </div>
                </div>
            </div>
            <!-- Donasi Instructions -->
            <div class="mt-12 text-center">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Cara Berdonasi</h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Donasi dapat dilakukan melalui transfer bank atau platform donasi online kami. Hubungi kami untuk informasi lebih lanjut atau klik tombol di bawah untuk memulai.</p>
                <a href="#" class="inline-block bg-yellow-500 text-green-600 font-bold px-6 py-3 rounded-md hover:bg-yellow-600 transition duration-300">Pelajari Cara Donasi</a>
            </div>
        </div>
    </section>
</div>
