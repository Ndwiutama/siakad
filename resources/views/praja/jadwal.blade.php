@extends('praja.layout')
@section('title', 'Jadwal')
@section('content')
<div class="max-w-4xl mx-auto mt-8 bg-white rounded-xl shadow p-6">
    <h1 class="font-bold text-xl mb-4 text-blue-900">Jadwal Kuliah</h1>
    <div class="mb-2 text-sm text-gray-700">Semester: 2024/2025 Genap</div>
    <table class="w-full text-sm border">
        <thead class="bg-blue-100">
            <tr>
                <th class="border px-2 py-1">Hari</th>
                <th class="border px-2 py-1">Jam</th>
                <th class="border px-2 py-1">Mata Kuliah</th>
                <th class="border px-2 py-1">Ruang</th>
            </tr>
        </thead>
        <tbody>
            <tr><td class="border px-2 py-1">Senin</td><td class="border px-2 py-1">08:00-10:00</td><td class="border px-2 py-1">Pengantar Ilmu Pemerintahan</td><td class="border px-2 py-1">A101</td></tr>
            <tr><td class="border px-2 py-1">Selasa</td><td class="border px-2 py-1">10:00-12:00</td><td class="border px-2 py-1">Bahasa Indonesia</td><td class="border px-2 py-1">A102</td></tr>
            <tr><td class="border px-2 py-1">Rabu</td><td class="border px-2 py-1">13:00-15:00</td><td class="border px-2 py-1">Matematika Dasar</td><td class="border px-2 py-1">A103</td></tr>
        </tbody>
    </table>
</div>
@endsection 