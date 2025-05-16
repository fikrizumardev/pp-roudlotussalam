@extends('layouts.front.app')

@section('content')
    <div class="bg-gray-50">
        <!-- Error Content -->
        <div class="flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 my-10">
            <div class="text-center">
                
                <!-- Error Message -->
                <div class="mb-8">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">404</h1>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Halaman Tidak Ditemukan</h2>
                    <p class="text-gray-500">Maaf, halaman yang Anda cari tidak dapat ditemukan.</p>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('front.homepage') }}" class="px-6 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300 flex items-center justify-center">
                        <i class="fas fa-home mr-2"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection