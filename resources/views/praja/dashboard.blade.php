@extends('praja.layout')
@section('title', 'Dashboard Praja')
@section('content')
<div class="max-w-5xl mx-auto flex flex-col gap-6">
    <!-- Header Selamat Datang -->
    <div class="bg-white rounded-lg shadow p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-2 mb-2 border">
        <div class="flex items-center gap-3">
            <i class="fa fa-user-circle text-3xl text-blue-900"></i>
            <div>
                <div class="font-semibold text-lg">Selamat datang, Praja!</div>
                <div class="text-gray-500 text-sm">Senin, 14 April 2025</div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Jadwal Mata Kuliah Hari Ini -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4 border col-span-2">
            <div class="font-bold text-center text-lg text-blue-900 mb-2">Jadwal Mata kuliah Hari ini</div>
            <div class="text-center text-base font-semibold mb-2">FPP6 - Pengantar Ilmu Politik - Command Center</div>
            <div class="flex justify-center items-center gap-2 mb-2">
                <span class="bg-gray-100 px-4 py-1 rounded-full text-sm">Senin, 14 April 2025</span>
                <span class="bg-blue-900 text-white px-4 py-1 rounded-full text-sm">08.00- 11.30</span>
                <i class="fa fa-calendar text-blue-900 ml-2"></i>
            </div>
        </div>
        <!-- Statistik Akademik -->
        <div class="flex flex-col gap-4 col-span-1">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center h-32 border">
                <div class="flex items-center gap-2 mb-2"><i class="fa fa-message text-gray-500"></i> <span class="font-semibold">IPK Saat Ini</span></div>
                <div class="text-3xl font-bold text-blue-900">3,75</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center h-32 border">
                <div class="flex items-center gap-2 mb-2"><i class="fa fa-calendar text-gray-500"></i> <span class="font-semibold">Tingkat Kehadiran</span></div>
                <div class="text-3xl font-bold text-blue-900">94%</div>
            </div>
        </div>
    </div>
    <!-- Informasi -->
    <div class="bg-white rounded-lg shadow p-4 border flex flex-col md:flex-row md:items-center md:justify-between mt-2">
        <div class="mb-2 md:mb-0">
            <div class="font-semibold mb-1">Informasi</div>
            <div class="text-gray-700 text-sm">Pastikan untuk memeriksa jadwal pelajaran secara berkala. Jika ada perubahan, akan diinformasikan melalui email.<br>Untuk pertanyaan lebih lanjut, silakan hubungi akademik.</div>
        </div>
        <div class="flex flex-col md:flex-row md:items-center gap-2 text-sm mt-2 md:mt-0">
            <div class="flex items-center gap-2"><i class="fa fa-envelope"></i> Akademik@gmail.com</div>
            <div class="flex items-center gap-2"><i class="fa fa-phone"></i> 081230468153</div>
        </div>
    </div>
</div>
@endsection 