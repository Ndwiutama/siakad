@extends('dosen.layout')
@section('title', 'Dashboard Dosen')
@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Dashboard Dosen</h1>
        <p class="text-gray-600">Selamat datang, Dosen! Senin, 14 April 2025</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center h-28 border border-gray-300 col-span-1">
            <div class="flex items-center gap-2 mb-2"><i class="fa fa-book text-gray-500"></i> <span class="font-semibold">Mata Kuliah Diampu</span></div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center h-28 border border-gray-300 col-span-1">
            <div class="flex items-center gap-2 mb-2"><i class="fa fa-users text-gray-500"></i> <span class="font-semibold">Praja Aktif</span></div>
            <div class="text-2xl font-bold text-blue-900">2449</div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center h-28 border border-gray-300 col-span-1">
            <div class="flex items-center gap-2 mb-2"><i class="fa fa-calendar text-gray-500"></i> <span class="font-semibold">Jadwal Hari ini</span></div>
            <div class="text-2xl font-bold text-blue-900">2 Kelas</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center h-28 border border-gray-300 w-full">
            <div class="flex items-center gap-2 mb-2"><i class="fa fa-clipboard-list text-gray-500"></i> <span class="font-semibold">Nilai & Kehadiran</span></div>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
        <div class="overflow-x-auto">
            <table class="w-full text-center border border-gray-300 rounded">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="py-2 px-3 border">Waktu</th>
                        <th class="py-2 px-3 border">Mata Kuliah</th>
                        <th class="py-2 px-3 border">Ruangan</th>
                        <th class="py-2 px-3 border">Keterangan</th>
                        <th class="py-2 px-3 border">Buat E Learning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border">Senin 08 : 00 - 10 : 00</td>
                        <td class="border">Pemrograman Web</td>
                        <td class="border">A101</td>
                        <td class="border">Hadir</td>
                        <td class="border"><button class="bg-white border border-gray-400 rounded px-2 py-1 flex items-center gap-1 mx-auto hover:bg-gray-100"><i class="fa fa-pen-to-square"></i> Buat</button></td>
                    </tr>
                    <tr>
                        <td class="border">Selasa 11 : 00 - 14 : 00</td>
                        <td class="border">Bahasa indonesia</td>
                        <td class="border">A102</td>
                        <td class="border">Belum Di Mulai</td>
                        <td class="border"><button class="bg-white border border-gray-400 rounded px-2 py-1 flex items-center gap-1 mx-auto hover:bg-gray-100"><i class="fa fa-pen-to-square"></i> Buat</button></td>
                    </tr>
                    <tr>
                        <td class="border">Rabu 7 : 00 - 10 : 45</td>
                        <td class="border">Politik Pemerintahan</td>
                        <td class="border">A103</td>
                        <td class="border">Belum Di Mulai</td>
                        <td class="border"><button class="bg-white border border-gray-400 rounded px-2 py-1 flex items-center gap-1 mx-auto hover:bg-gray-100"><i class="fa fa-pen-to-square"></i> Buat</button></td>
                    </tr>
                    <tr>
                        <td class="border">Kamis 9 : 00 - 12 : 45</td>
                        <td class="border">Matematika</td>
                        <td class="border">A104</td>
                        <td class="border">Hadir</td>
                        <td class="border"><button class="bg-white border border-gray-400 rounded px-2 py-1 flex items-center gap-1 mx-auto hover:bg-gray-100"><i class="fa fa-pen-to-square"></i> Buat</button></td>
                    </tr>
                    <tr>
                        <td class="border">Jumat 10 : 15 - 12 : 00</td>
                        <td class="border">Inggris</td>
                        <td class="border">A105</td>
                        <td class="border">Hadir</td>
                        <td class="border"><button class="bg-white border border-gray-400 rounded px-2 py-1 flex items-center gap-1 mx-auto hover:bg-gray-100"><i class="fa fa-pen-to-square"></i> Buat</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 