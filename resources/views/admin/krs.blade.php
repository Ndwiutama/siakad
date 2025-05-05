@extends('admin.layout')
@section('title', 'Manajemen KRS')
@section('content')
<h1 class="text-2xl font-bold mb-6">Manajemen KRS</h1>
<p class="mb-4">Input & approval Kartu Rencana Studi mahasiswa.</p>
<div class="bg-white rounded-lg shadow-md overflow-x-auto">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Praja</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Semester</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4">Ahmad Fadillah</td>
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Pemrograman Web</td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Menunggu</span>
                </td>
                <td class="px-6 py-4 flex gap-2">
                    <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Setujui</button>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Tolak</button>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4">Budi Santoso</td>
                <td class="px-6 py-4">4</td>
                <td class="px-6 py-4">Matematika</td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Disetujui</span>
                </td>
                <td class="px-6 py-4 flex gap-2">
                    <button class="bg-gray-400 text-white px-3 py-1 rounded cursor-not-allowed" disabled>Setujui</button>
                    <button class="bg-gray-400 text-white px-3 py-1 rounded cursor-not-allowed" disabled>Tolak</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection 