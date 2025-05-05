@extends('admin.layout')
@section('title', 'Presensi')
@section('content')
<h1 class="text-2xl font-bold mb-6">Presensi</h1>
<p class="mb-4">Cek absensi Praja dan dosen.</p>

<!-- Tabel Presensi Praja -->
<div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Presensi Praja</h2>
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Praja</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pertemuan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kehadiran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">Ahmad Fadillah</td>
                    <td class="px-6 py-4">Pemrograman Web</td>
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Hadir</span>
                    </td>
                    <td class="px-6 py-4">2024-04-28 08:00</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Input/Edit Absensi</button>
                        <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Rekap</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Tabel Presensi Dosen -->
<div>
    <h2 class="text-xl font-semibold mb-4">Presensi Dosen</h2>
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Dosen</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pertemuan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kehadiran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">Dr. John Doe</td>
                    <td class="px-6 py-4">Matematika</td>
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Tidak Hadir</span>
                    </td>
                    <td class="px-6 py-4">2024-04-28 10:00</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Input/Edit Absensi</button>
                        <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Rekap</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection