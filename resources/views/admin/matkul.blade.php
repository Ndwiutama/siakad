@extends('admin.layout')
@section('title', 'Mata Kuliah')
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Manajemen Mata Kuliah</h1>
        <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            <i class="fas fa-plus mr-2"></i>Tambah Mata Kuliah
        </button>
    </div>

    <!-- Filter dan Pencarian -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input type="text" placeholder="Cari mata kuliah..." class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="flex gap-4">
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Program Studi</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                </select>
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabel Mata Kuliah -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kode MK</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">SKS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dosen Pengampu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jadwal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">MK001</td>
                    <td class="px-6 py-4">Pemrograman Web</td>
                    <td class="px-6 py-4">3</td>
                    <td class="px-6 py-4">Dr. John Doe</td>
                    <td class="px-6 py-4">
                        <span class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                            Senin, 08:00 - 10:30
                        </span>
                        <span class="inline-block bg-green-100 text-green-800 px-2 py-1 rounded text-sm ml-2">
                            Ruang 101
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah/Edit Mata Kuliah -->
    <div class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="modalMatkul">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Tambah Mata Kuliah</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kode Mata Kuliah</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">SKS</label>
                        <input type="number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Dosen Pengampu</label>
                        <select class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                            <option value="">Pilih Dosen</option>
                            <option value="1">Dr. John Doe</option>
                            <option value="2">Dr. Jane Smith</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jadwal</label>
                        <div class="grid grid-cols-2 gap-4">
                            <select class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                                <option value="">Hari</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                            </select>
                            <input type="time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ruangan</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection