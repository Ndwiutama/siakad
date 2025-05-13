@extends('praja.layout')
@section('title', 'Kartu Rencana Studi')
@section('content')
<div class="max-w-5xl mx-auto mt-8">
    <div class="bg-white rounded-xl shadow p-6 mb-6 border">
        <div class="font-bold text-blue-900 text-lg mb-2">Kartu Rencana Studi (KRS)</div>
        <div class="text-sm text-gray-700 mb-1">Nama: <b>{{ $praja->user->name ?? '-' }}</b></div>
        <div class="text-sm text-gray-700 mb-3">Prodi: <b>{{ $praja->program_studi ?? '-' }}</b></div>
        <div class="flex justify-end mb-4">
            <a href="{{ route('praja.krs.pdf') }}" target="_blank" class="bg-blue-700 text-white px-4 py-2 rounded shadow hover:bg-blue-800 flex items-center gap-2">
                <i class="fa fa-print"></i> Cetak PDF
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @for ($i = 1; $i <= 8; $i++)
            @php
                $matkuls = (isset($praja) && $praja && isset($praja->nilaiKehadiran)) ? $praja->nilaiKehadiran->where('semester', $i) : collect();
            @endphp
            <div class="rounded-xl shadow border p-4 bg-gradient-to-br 
                @if($i % 3 == 1) from-blue-50 via-pink-50 to-pink-100
                @elseif($i % 3 == 2) from-blue-50 via-green-50 to-green-100
                @else from-blue-50 via-purple-50 to-purple-100
                @endif
                ">
                <div class="font-bold text-blue-900 mb-1">Semester {{ $i }}</div>
                <div class="text-xs text-gray-600 mb-1">Tahun Ajaran: 202X/202X</div>
                <div class="text-sm text-gray-700 mb-2">Total Matakuliah: {{ $matkuls->count() }}</div>
                <div class="text-sm text-gray-700 mb-2">Total SKS: -</div>
                @if($matkuls->count())
                <table class="w-full text-xs mb-2">
                    <thead>
                        <tr class="text-left bg-blue-50">
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