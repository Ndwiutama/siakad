@extends('admin.layout')
@section('title', 'Laporan')
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Laporan Akademik</h1>
    </div>

    <!-- Card Laporan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Data Dosen -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center gap-4 mb-4">
                <i class="fa fa-chalkboard-teacher text-3xl text-blue-700"></i>
                <h2 class="text-xl font-semibold">Data Dosen</h2>
            </div>
            <p class="text-gray-600 mb-4">Lihat dan unduh laporan data dosen</p>
            <div class="flex gap-2">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                    <i class="fas fa-file-pdf mr-2"></i>PDF
                </button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">
                    <i class="fas fa-file-excel mr-2"></i>Excel
                </button>
            </div>
        </div>

        <!-- Data Praja -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center gap-4 mb-4">
                <i class="fa fa-user-graduate text-3xl text-blue-700"></i>
                <h2 class="text-xl font-semibold">Data Praja</h2>
            </div>
            <p class="text-gray-600 mb-4">Lihat dan unduh laporan data praja</p>
            <div class="flex gap-2">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                    <i class="fas fa-file-pdf mr-2"></i>PDF
                </button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">
                    <i class="fas fa-file-excel mr-2"></i>Excel
                </button>
            </div>
        </div>

        <!-- Rekap Mata Kuliah -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center gap-4 mb-4">
                <i class="fa fa-book text-3xl text-blue-700"></i>
                <h2 class="text-xl font-semibold">Rekap Mata Kuliah</h2>
            </div>
            <p class="text-gray-600 mb-4">Lihat dan unduh rekap mata kuliah</p>
            <div class="flex gap-2">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                    <i class="fas fa-file-pdf mr-2"></i>PDF
                </button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">
                    <i class="fas fa-file-excel mr-2"></i>Excel
                </button>
            </div>
        </div>

        <!-- Export Laporan -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center gap-4 mb-4">
                <i class="fa fa-file-export text-3xl text-blue-700"></i>
                <h2 class="text-xl font-semibold">Export Laporan</h2>
            </div>
            <p class="text-gray-600 mb-4">Export semua laporan dalam satu file</p>
            <div class="flex gap-2">
                <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                    <i class="fas fa-file-pdf mr-2"></i>PDF
                </button>
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">
                    <i class="fas fa-file-excel mr-2"></i>Excel
                </button>
            </div>
        </div>
    </div>
</div>
@endsection