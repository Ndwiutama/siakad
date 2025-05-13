@extends('praja.layout')
@section('title', 'Seminar Proposal')
@section('content')
<div class="max-w-4xl mx-auto mt-8 bg-white rounded-xl shadow p-6">
    <h1 class="font-bold text-xl mb-4 text-blue-900">Seminar Proposal</h1>
    <div class="mb-4">
        <div class="text-sm text-gray-700 mb-2">Status: <span class="font-semibold text-green-600">Aktif</span></div>
        <div class="text-sm text-gray-700">Periode: 2024/2025 Genap</div>
    </div>
    
    <!-- Informasi Proposal -->
    <div class="bg-blue-50 rounded-lg p-4 mb-6">
        <h2 class="font-semibold text-blue-900 mb-2">Informasi Proposal</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div>
                <div class="mb-2"><span class="font-semibold">Judul:</span> Analisis Implementasi Kebijakan Publik di Era Digital</div>
                <div class="mb-2"><span class="font-semibold">Dosen Pembimbing:</span> Dr. Aria Jufar</div>
                <div class="mb-2"><span class="font-semibold">Status:</span> <span class="text-green-600">Disetujui</span></div>
            </div>
            <div>
                <div class="mb-2"><span class="font-semibold">Tanggal Pengajuan:</span> 1 Maret 2024</div>
                <div class="mb-2"><span class="font-semibold">Tanggal Seminar:</span> 15 April 2024</div>
                <div class="mb-2"><span class="font-semibold">Lokasi:</span> Ruang Seminar A101</div>
            </div>
        </div>
    </div>

    <!-- Jadwal Seminar -->
    <div class="mb-6">
        <h2 class="font-semibold text-blue-900 mb-3">Jadwal Seminar</h2>
        <table class="w-full text-sm border">
            <thead class="bg-blue-100">
                <tr>
                    <th class="border px-2 py-1">Tanggal</th>
                    <th class="border px-2 py-1">Waktu</th>
                    <th class="border px-2 py-1">Ruang</th>
                    <th class="border px-2 py-1">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-2 py-1">15 April 2024</td>
                    <td class="border px-2 py-1">09:00 - 11:00</td>
                    <td class="border px-2 py-1">A101</td>
                    <td class="border px-2 py-1"><span class="text-green-600">Terjadwal</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Dokumen -->
    <div>
        <h2 class="font-semibold text-blue-900 mb-3">Dokumen</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Proposal Seminar</div>
                    <div class="text-sm text-gray-600">Upload: 1 Maret 2024</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-3 p-3 border rounded hover:bg-blue-50">
                <i class="fa fa-file-pdf text-red-600 text-xl"></i>
                <div>
                    <div class="font-semibold">Form Persetujuan Dosen</div>
                    <div class="text-sm text-gray-600">Upload: 28 Februari 2024</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection 