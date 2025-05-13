@extends('praja.layout')
@section('title', 'Kartu Hasil Studi')
@section('content')
<div class="max-w-5xl mx-auto mt-8">
    <div class="bg-white rounded-xl shadow p-6 mb-6 border">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
            <div>
                <div class="font-bold text-blue-900 text-lg">Kartu Hasil Studi (KHS)</div>
                <div class="text-sm text-gray-700">Nama: <b>Nama Praja</b></div>
                <div class="text-sm text-gray-700">NPP: <b>123456789</b></div>
                <div class="text-sm text-gray-700">Prodi: <b>Program Studi Praja</b></div>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="bg-blue-100 text-blue-900 px-4 py-2 rounded-full font-bold shadow border border-blue-300">
                    IPK: 3.75
                </span>
            </div>
        </div>
        <div class="flex justify-end mb-4">
            <a href="#" class="bg-blue-700 text-white px-4 py-2 rounded shadow hover:bg-blue-800 flex items-center gap-2">
                <i class="fa fa-print"></i> Cetak PDF
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @for ($i = 1; $i <= 8; $i++)
            <div class="rounded-xl shadow border p-4 bg-gradient-to-br 
                @if($i % 3 == 1) from-blue-50 via-pink-50 to-pink-100
                @elseif($i % 3 == 2) from-blue-50 via-green-50 to-green-100
                @else from-blue-50 via-purple-50 to-purple-100
                @endif
                ">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-bold text-blue-900">Semester {{ $i }}</div>
                    <span class="bg-white text-xs px-2 py-1 rounded shadow border border-gray-200">202X/202X Ganjil</span>
                </div>
                <div class="text-xs text-gray-600 mb-2">Total Matakuliah: 6 | Total SKS: 18</div>
                <table class="w-full text-xs mb-2 rounded overflow-hidden">
                    <thead>
                        <tr class="bg-blue-50 text-blue-900">
                            <th class="py-1 px-2">No</th>
                            <th class="py-1 px-2">Mata Kuliah</th>
                            <th class="py-1 px-2">Nilai</th>
                            <th class="py-1 px-2">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="py-1 px-2">1</td>
                            <td class="py-1 px-2">Pengantar Ilmu Pemerintahan</td>
                            <td class="py-1 px-2">88</td>
                            <td class="py-1 px-2">A</td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2">2</td>
                            <td class="py-1 px-2">Bahasa Indonesia</td>
                            <td class="py-1 px-2">80</td>
                            <td class="py-1 px-2">A-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-1 px-2">3</td>
                            <td class="py-1 px-2">Matematika Dasar</td>
                            <td class="py-1 px-2">75</td>
                            <td class="py-1 px-2">B+</td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2">4</td>
                            <td class="py-1 px-2">Pendidikan Pancasila</td>
                            <td class="py-1 px-2">82</td>
                            <td class="py-1 px-2">A-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-1 px-2">5</td>
                            <td class="py-1 px-2">Kewarganegaraan</td>
                            <td class="py-1 px-2">78</td>
                            <td class="py-1 px-2">B+</td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2">6</td>
                            <td class="py-1 px-2">Ilmu Sosial Dasar</td>
                            <td class="py-1 px-2">85</td>
                            <td class="py-1 px-2">A</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-700 text-xs font-semibold hover:underline flex items-center gap-1">
                        Lihat Detail <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection 
