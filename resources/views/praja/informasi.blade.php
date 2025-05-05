@extends('praja.layout')
@section('title', 'Informasi')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="mb-4">
        <span class="text-blue-900 font-bold text-lg">Informasi Akademik</span>
    </div>
    
    <!-- Pengumuman -->
    <div class="bg-white rounded-lg shadow-md p-5 border mb-6">
        <div class="font-semibold text-blue-900 text-lg mb-4">Pengumuman</div>
        <div class="space-y-4">
            <div class="border-b pb-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-semibold">Jadwal UAS Semester Genap 2023/2024</span>
                    <span class="text-sm text-gray-500">20 April 2024</span>
                </div>
                <p class="text-sm text-gray-600">Diumumkan kepada seluruh Praja bahwa jadwal UAS akan dilaksanakan pada tanggal 1-15 Juni 2024...</p>
                <a href="#" class="text-blue-900 text-sm hover:underline">Baca selengkapnya</a>
            </div>
            
            <div class="border-b pb-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-semibold">Pendaftaran Wisuda Periode Juni 2024</span>
                    <span class="text-sm text-gray-500">15 April 2024</span>
                </div>
                <p class="text-sm text-gray-600">Pendaftaran wisuda periode Juni 2024 akan dibuka pada tanggal 1-30 Mei 2024...</p>
                <a href="#" class="text-blue-900 text-sm hover:underline">Baca selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Kalender Akademik -->
    <div class="bg-white rounded-lg shadow-md p-5 border mb-6">
        <div class="font-semibold text-blue-900 text-lg mb-4">Kalender Akademik</div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border rounded p-3">
                <div class="font-semibold mb-2">Semester Genap 2023/2024</div>
                <ul class="text-sm space-y-2">
                    <li class="flex justify-between">
                        <span>Perkuliahan</span>
                        <span>1 Feb - 31 Mei 2024</span>
                    </li>
                    <li class="flex justify-between">
                        <span>UAS</span>
                        <span>1-15 Juni 2024</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pengumuman Nilai</span>
                        <span>30 Juni 2024</span>
                    </li>
                </ul>
            </div>
            <div class="border rounded p-3">
                <div class="font-semibold mb-2">Semester Ganjil 2024/2025</div>
                <ul class="text-sm space-y-2">
                    <li class="flex justify-between">
                        <span>Perkuliahan</span>
                        <span>1 Sep - 31 Des 2024</span>
                    </li>
                    <li class="flex justify-between">
                        <span>UAS</span>
                        <span>1-15 Jan 2025</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pengumuman Nilai</span>
                        <span>30 Jan 2025</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Link Penting -->
    <div class="bg-white rounded-lg shadow-md p-5 border">
        <div class="font-semibold text-blue-900 text-lg mb-4">Link Penting</div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-gray-50">
                <i class="fa fa-book text-blue-900 text-xl"></i>
                <div>
                    <div class="font-semibold">E-Learning IPDN</div>
                    <div class="text-sm text-gray-600">Akses materi pembelajaran online</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-gray-50">
                <i class="fa fa-database text-blue-900 text-xl"></i>
                <div>
                    <div class="font-semibold">Perpustakaan Digital</div>
                    <div class="text-sm text-gray-600">Akses koleksi digital perpustakaan</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-gray-50">
                <i class="fa fa-file-alt text-blue-900 text-xl"></i>
                <div>
                    <div class="font-semibold">Portal Jurnal</div>
                    <div class="text-sm text-gray-600">Akses jurnal ilmiah</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-gray-50">
                <i class="fa fa-calendar-check text-blue-900 text-xl"></i>
                <div>
                    <div class="font-semibold">Jadwal Kuliah</div>
                    <div class="text-sm text-gray-600">Lihat jadwal perkuliahan</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection