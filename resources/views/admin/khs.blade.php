@extends('admin.layout')
@section('title', 'Penilaian / KHS')
@section('content')
<h1 class="text-2xl font-bold mb-6">Penilaian / KHS</h1>
<p class="mb-4">Input nilai kuliah dan rekap KHS.</p>
<div class="bg-white rounded-lg shadow-md overflow-x-auto">
    <table class="min-w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Praja</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Semester</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai Angka</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai Huruf</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Keterangan</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4">Ahmad Fadillah</td>
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Pemrograman Web</td>
                <td class="px-6 py-4">90</td>
                <td class="px-6 py-4">A</td>
                <td class="px-6 py-4">Lulus</td>
                <td class="px-6 py-4 flex gap-2">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Input/Edit Nilai</button>
                    <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Rekap KHS</button>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4">Budi Santoso</td>
                <td class="px-6 py-4">4</td>
                <td class="px-6 py-4">Matematika</td>
                <td class="px-6 py-4">75</td>
                <td class="px-6 py-4">B</td>
                <td class="px-6 py-4">Lulus</td>
                <td class="px-6 py-4 flex gap-2">
                    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Input/Edit Nilai</button>
                    <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Rekap KHS</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection 