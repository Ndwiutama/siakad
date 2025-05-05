@extends('praja.layout')
@section('title', 'Dashboard Praja')
@section('content')
<div class="max-w-5xl mx-auto flex flex-col gap-6">
    <!-- Box Selamat Datang -->
    <div class="bg-white rounded-lg shadow p-4 flex items-center gap-4 mb-2">
        <i class="fa fa-user-circle text-3xl text-gray-500"></i>
        <div>
            <div class="font-semibold text-lg">Selamat datang, Praja!</div>
            <div class="text-gray-500 text-sm">Senin, 14 April 2025</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Mata Kuliah & Info Akademik -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col gap-4 border border-gray-300 col-span-2">
            <div class="font-bold text-center text-xl text-blue-900 mb-2">Mata Kuliah</div>
            <div class="overflow-x-auto mb-4">
                <table class="w-full text-center border border-gray-300 rounded">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="py-2 px-3 border">Hari</th>
                            <th class="py-2 px-3 border">Mata Kuliah</th>
                            <th class="py-2 px-3 border">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border">Senin</td><td class="border">Matematika</td><td class="border">08:00 - 10:00</td></tr>
                        <tr><td class="border">Selasa</td><td class="border">Bahasa Indonesia</td><td class="border">08:00 - 10:00</td></tr>
                        <tr><td class="border">Rabu</td><td class="border">Ilmu Pengetahuan</td><td class="border">08:00 - 10:00</td></tr>
                        <tr><td class="border">Kamis</td><td class="border">Etika Pemerintahan</td><td class="border">08:00 - 10:00</td></tr>
                        <tr><td class="border">Jumat</td><td class="border">Kewarganegaraan</td><td class="border">08:00 - 10:00</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="font-bold text-lg mb-2">Informasi Akademik</div>
            <div class="text-gray-600 text-sm mb-2">Pastikan untuk memeriksa jadwal pelajaran secara berkala. Jika ada perubahan, akan diinformasikan melalui email. Untuk pertanyaan lebih lanjut, silakan hubungi akademik.</div>
            <div class="flex flex-col gap-1 text-sm text-gray-700">
                <div class="flex items-center gap-2"><i class="fa fa-envelope"></i> Akademik@gmail.com</div>
                <div class="flex items-center gap-2"><i class="fa fa-phone"></i> 081230468153</div>
            </div>
        </div>
        <!-- Statistik Akademik -->
        <div class="flex flex-col gap-4 col-span-1">
            <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center justify-center h-32 border border-gray-300">
                <div class="flex items-center gap-2 mb-2"><i class="fa fa-message text-gray-500"></i> <span class="font-semibold">IPK Saat Ini</span></div>
                <div class="text-3xl font-bold text-blue-900">3,75</div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center justify-center h-32 border border-gray-300">
                <div class="flex items-center gap-2 mb-2"><i class="fa fa-calendar text-gray-500"></i> <span class="font-semibold">Kehadiran</span></div>
                <div class="text-3xl font-bold text-blue-900">94%</div>
            </div>
        </div>
    </div>
</div>
@endsection 