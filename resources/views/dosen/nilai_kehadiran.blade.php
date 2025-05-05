@extends('dosen.layout')
@section('title', 'Nilai & Kehadiran')
@section('content')
<div class="max-w-6xl mx-auto mt-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Nilai & Kehadiran</h1>
        <p class="text-gray-600">Kelola nilai dan kehadiran praja</p>
    </div>

    <!-- Filter -->
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
                <label class="block text-sm font-medium text-gray-700 mb-1">Mata Kuliah</label>
                <select class="border rounded-md px-3 py-2 w-48">
                    <option>Semua Mata Kuliah</option>
                    <option>Politik Indonesia</option>
                    <option>Manajemen Publik</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <select class="border rounded-md px-3 py-2 w-48">
                    <option>Semua Kelas</option>
                    <option>Kelas A</option>
                    <option>Kelas B</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabel Nilai & Kehadiran -->
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NPP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kehadiran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tugas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">UTS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">UAS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai Akhir</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
@foreach($prajas as $praja)
    <tr>
        <td class="px-6 py-4">{{ $praja->npp }}</td>
        <td class="px-6 py-4">{{ $praja->user->name ?? '-' }}</td>
        <td class="px-6 py-4"><input type="text" class="border rounded px-2 py-1 w-20" name="kehadiran[]" value=""></td>
        <td class="px-6 py-4"><input type="text" class="border rounded px-2 py-1 w-20" name="tugas[]" value=""></td>
        <td class="px-6 py-4"><input type="text" class="border rounded px-2 py-1 w-20" name="uts[]" value=""></td>
        <td class="px-6 py-4"><input type="text" class="border rounded px-2 py-1 w-20" name="uas[]" value=""></td>
        <td class="px-6 py-4"><input type="text" class="border rounded px-2 py-1 w-20" name="nilai_akhir[]" value=""></td>
        <td class="px-6 py-4">
            <button class="text-blue-600 hover:text-blue-800">Simpan</button>
        </td>
    </tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection