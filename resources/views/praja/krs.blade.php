@extends('praja.layout')
@section('title', 'Kartu Rencana Studi')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <div class="mb-2 font-semibold text-blue-900 text-lg">Kartu Rencana Studi ( KRS )</div>
        <div class="text-sm text-gray-700 mb-1">
            <span class="font-semibold">Nama</span> : {{ $praja->user->name ?? '-' }}
        </div>
        <div class="text-sm text-gray-700 mb-3">
            <span class="font-semibold">Program Studi</span> : {{ $praja->program_studi ?? '-' }}
        </div>
        <div class="flex justify-end mb-4">
            <a href="{{ route('praja.krs.pdf') }}" target="_blank" class="bg-blue-700 text-white px-4 py-2 rounded shadow hover:bg-blue-800 flex items-center gap-2">
                <i class="fa fa-print"></i> Cetak PDF
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @for ($i = 1; $i <= 8; $i++)
            <div class="rounded-xl shadow border p-4 bg-gradient-to-br 
                @if($i % 3 == 1) from-blue-100 via-pink-100 to-pink-200
                @elseif($i % 3 == 2) from-blue-100 via-green-100 to-green-200
                @else from-blue-100 via-purple-100 to-purple-200
                @endif
                ">
                <div class="font-bold text-blue-900 mb-1">Semester {{ $i }}</div>
                <div class="text-xs text-gray-600 mb-1">202X/202X</div>
                @php
                    $matkuls = $praja->nilaiKehadiran->where('semester', $i);
                @endphp
                <div class="text-sm text-gray-700 mb-2">Total Matakuliah: {{ $matkuls->count() }}</div>
                <div class="text-sm text-gray-700 mb-2">Total SKS: -</div>
                @if($matkuls->count())
                <table class="w-full text-xs mb-2">
                    <thead>
                        <tr class="text-left">
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matkuls as $mk)
                        <tr>
                            <td>{{ $mk->mata_kuliah }}</td>
                            <td>{{ $mk->kelas }}</td>
                            <td>{{ $mk->nilai_akhir }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-gray-400 italic text-xs">Belum ada matakuliah</div>
                @endif
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