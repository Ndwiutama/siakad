@extends('praja.layout')
@section('title', 'Kuesioner')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <div class="mb-4">
            <div class="font-semibold text-blue-900 text-base mb-2">Kuesioner</div>
            <div class="flex gap-2 mb-4">
                <button class="bg-blue-900 text-white px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 focus:outline-none">
                    <i class="fa fa-clipboard-check"></i> Evadom
                </button>
                <button class="bg-white text-blue-900 px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 hover:bg-blue-50 focus:outline-none">
                    <i class="fa fa-hand-holding-heart"></i> Layanan
                </button>
                <button class="bg-white text-blue-900 px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 hover:bg-blue-50 focus:outline-none">
                    <i class="fa fa-lightbulb"></i> Kritik & Saran
                </button>
            </div>
            <select class="border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200">
                <option>2024/2025 Genap</option>
            </select>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="w-full text-sm text-center border border-gray-300 rounded">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border px-2 py-1">Mata Kuliah</th>
                        <th class="border px-2 py-1">Dosen</th>
                        <th class="border px-2 py-1">Jadwal Pengisian</th>
                        <th class="border px-2 py-1">Status</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-2 py-1">B.xxx</td>
                        <td class="border px-2 py-1">Dosen Mata Kuliah 1</td>
                        <td class="border px-2 py-1">xx April 2025 - xx Agustus 2025</td>
                        <td class="border px-2 py-1">
                            <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                        </td>
                        <td class="border px-2 py-1">
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">B.xxx</td>
                        <td class="border px-2 py-1">Dosen Mata Kuliah 2</td>
                        <td class="border px-2 py-1">xx April 2025 - xx Agustus 2025</td>
                        <td class="border px-2 py-1">
                            <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                        </td>
                        <td class="border px-2 py-1">
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">B.xxx</td>
                        <td class="border px-2 py-1">Dosen Mata Kuliah 3</td>
                        <td class="border px-2 py-1">xx April 2025 - xx Agustus 2025</td>
                        <td class="border px-2 py-1">
                            <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                        </td>
                        <td class="border px-2 py-1">
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- Hapus bagian icon sosmed di sini, karena sudah ada di layout --}}
</div>
@endsection