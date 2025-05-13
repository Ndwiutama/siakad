@extends('praja.layout')
@section('title', 'Kerja Praktek')
@section('content')
<div class="max-w-4xl mx-auto mt-8 bg-white rounded-xl shadow p-6">
    <h1 class="font-bold text-xl mb-4 text-blue-900">Kerja Praktek</h1>
    <div class="mb-4">
        <div class="text-sm text-gray-700 mb-2">Status: <span class="font-semibold text-green-600">Aktif</span></div>
        <div class="text-sm text-gray-700">Periode: 2024/2025 Genap</div>
    </div>

    <!-- Informasi Kerja Praktek -->
    <div class="bg-blue-50 rounded-lg p-4 mb-6">
        <h2 class="font-semibold text-blue-900 mb-2">Informasi Kerja Praktek</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <div class="mb-2"><span class="font-semibold">Judul:</span> Analisis Implementasi E-Government di Pemerintah Daerah</div>
                <div class="mb-2"><span class="font-semibold">Dosen Pembimbing:</span> Dr. Ryanto</div>
                <div class="mb-2"><span class="font-semibold">Lokasi KP:</span> Dinas Komunikasi dan Informatika Kota Bandung</div>
            </div>
            <div>
                <div class="mb-2"><span class="font-semibold">Tanggal Mulai:</span> 1 Maret 2024</div>
                <div class="mb-2"><span class="font-semibold">Tanggal Selesai:</span> 31 Maret 2024</div>
                <div class="mb-2"><span class="font-semibold">Status:</span> <span class="text-green-600">Sedang Berjalan</span></div>
            </div>
        </div>
    </div>

    <!-- Progress Kerja Praktek -->
    <div class="mb-6">
        <h2 class="font-semibold text-blue-900 mb-3">Progress Kerja Praktek</h2>
        <div class="space-y-4">
            <div class="border rounded-lg p-4">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-semibold">Minggu 1</div>
                    <span class="text-green-600">Selesai</span>
                </div>
                <p class="text-sm text-gray-600">Pengenalan lingkungan kerja dan pembekalan materi dasar e-government</p>
            </div>
            <div class="border rounded-lg p-4">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-semibold">Minggu 2</div>
                    <span class="text-yellow-600">Dalam Proses</span>
                </div>
                <p class="text-sm text-gray-600">Analisis sistem e-government yang sedang berjalan</p>
            </div>
            <div class="border rounded-lg p-4 bg-gray-50">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-semibold">Minggu 3-4</div>
                    <span class="text-gray-600">Belum Dimulai</span>
                </div>
                <p class="text-sm text-gray-600">Implementasi dan evaluasi sistem e-government</p>
            </div>
        </div>
    </div>

    <!-- Dokumen -->
    <div>
        <h2 class="font-semibold text-blue-900 mb-3">Dokumen</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Proposal Kerja Praktek</div>
                    <div class="text-sm text-gray-600">Upload: 15 Februari 2024</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Surat Pengantar</div>
                    <div class="text-sm text-gray-600">Upload: 20 Februari 2024</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Laporan Mingguan</div>
                    <div class="text-sm text-gray-600">Upload: 8 Maret 2024</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Form Penilaian</div>
                    <div class="text-sm text-gray-600">Belum diupload</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection 