@extends('praja.layout')
@section('title', 'Kartu Hasil Studi')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
            <div>
                <div class="font-semibold text-blue-900 text-base mb-1">Kartu Hasil Studi (KHS)</div>
                <div class="text-xs text-gray-700 mb-0.5">
                    <span class="font-semibold">Nama</span> : Nama Praja
                </div>
                <div class="text-xs text-gray-700">
                    <span class="font-semibold">Program Studi</span> : Program Studi Praja
                </div>
            </div>
            <div class="mt-3 md:mt-0">
                <span class="inline-block bg-green-400 text-white text-xs font-semibold px-4 py-1 rounded-full shadow border border-green-600">
                    INDEKS PRESTASI KUMULATIF : X.XX
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            @for ($i = 1; $i <= 8; $i++)
            <div class="rounded-xl shadow border p-4 bg-gradient-to-br 
                @if($i % 3 == 1) from-blue-100 via-pink-100 to-pink-200
                @elseif($i % 3 == 2) from-blue-100 via-green-100 to-green-200
                @else from-blue-100 via-purple-100 to-purple-200
                @endif
                ">
                <div class="font-bold text-blue-900 mb-1">Semester {{ $i }}</div>
                <div class="text-xs text-gray-600 mb-1">202X/202X Ganjil</div>
                <div class="text-sm text-gray-700">Total Paket</div>
                <div class="text-sm text-gray-700 mb-1">IP</div>
                <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-2 py-0.5 rounded mb-2">Aktif</span>
                <a href="#" class="inline-block mt-2 px-4 py-1 bg-white text-blue-700 rounded shadow hover:bg-blue-50 text-xs font-semibold border border-blue-200 transition">
                    Lihat Detail <i class="fa fa-arrow-right ml-1"></i>
                </a>
            </div>
            @endfor
        </div>
    </div>
    <div class="flex justify-center mt-6 space-x-6 text-gray-500 text-xl">
        <a href="#"><i class="fab fa-twitter hover:text-blue-500"></i></a>
        <a href="#"><i class="fab fa-facebook hover:text-blue-700"></i></a>
        <a href="#"><i class="fab fa-instagram hover:text-pink-500"></i></a>
        <a href="#"><i class="fab fa-youtube hover:text-red-600"></i></a>
    </div>
</div>
@endsection 