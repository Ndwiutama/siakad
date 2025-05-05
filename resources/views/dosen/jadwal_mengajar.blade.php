@extends('dosen.layout')
@section('title', 'Jadwal Mengajar')
@section('content')
<div class="max-w-6xl mx-auto mt-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Jadwal Mengajar</h1>
        <p class="text-gray-600">Lihat jadwal mengajar Anda</p>
    </div>

    <!-- Filter Jadwal -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <div class="flex flex-wrap gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Semester</label>
                <select class="border rounded-md px-3 py-2 w-48">
                    <option>Semester Genap 2023/2024</option>
                    <option>Semester Ganjil 2023/2024</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Hari</label>
                <select class="border rounded-md px-3 py-2 w-48">
                    <option>Semua Hari</option>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabel Jadwal -->
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hari</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ruangan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">Senin</td>
                    <td class="px-6 py-4">08:00 - 09:40</td>
                    <td class="px-6 py-4">Pemrograman Web</td>
                    <td class="px-6 py-4">A-1</td>
                    <td class="px-6 py-4">Lab Komputer 1</td>
                    <td class="px-6 py-4">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Detail</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Selasa</td>
                    <td class="px-6 py-4">10:00 - 11:40</td>
                    <td class="px-6 py-4">Basis Data</td>
                    <td class="px-6 py-4">B-2</td>
                    <td class="px-6 py-4">Lab Komputer 2</td>
                    <td class="px-6 py-4">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection