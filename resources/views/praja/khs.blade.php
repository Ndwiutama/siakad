@extends('praja.layout')
@section('title', 'Kartu Hasil Studi')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif

    <!-- Debug info -->
    <div class="bg-yellow-100 p-4 mb-4 rounded">
        <p>Debug info:</p>
        <p>Praja exists: {{ isset($praja) ? 'Yes' : 'No' }}</p>
        <p>Praja is null: {{ is_null($praja) ? 'Yes' : 'No' }}</p>
        @if(isset($praja) && !is_null($praja))
            <p>NilaiKehadiran exists: {{ isset($praja->nilaiKehadiran) ? 'Yes' : 'No' }}</p>
        @endif
    </div>

    @if(isset($praja) && $praja)
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
            <div>
                <div class="font-semibold text-blue-900 text-base mb-1">Kartu Hasil Studi (KHS)</div>
                <div class="text-xs text-gray-700 mb-0.5">
                    <span class="font-semibold">Nama</span> : {{ $praja->user->name ?? 'Nama Praja' }}
                </div>
                <div class="text-xs text-gray-700">
                    <span class="font-semibold">Program Studi</span> : {{ $praja->program_studi ?? 'Program Studi Praja' }}
                </div>
            </div>
            <div class="mt-3 md:mt-0">
                <span class="inline-block bg-green-400 text-white text-xs font-semibold px-4 py-1 rounded-full shadow border border-green-600">
                    INDEKS PRESTASI KUMULATIF : X.XX
                </span>
            </div>
        </div>
        <div class="flex justify-end mb-4">
            <a href="{{ route('praja.khs.pdf') }}" target="_blank" class="bg-blue-700 text-white px-4 py-2 rounded shadow hover:bg-blue-800 flex items-center gap-2">
                <i class="fa fa-print"></i> Cetak PDF
            </a>
        </div>
        
        @for ($i = 1; $i <= 8; $i++)
            @php 
                $matkuls = collect(); 
                if(isset($praja->nilaiKehadiran)) {
                    $matkuls = $praja->nilaiKehadiran->where('semester', $i);
                }
            @endphp
            <div class="mb-6">
                <h3 class="font-bold text-blue-900 mb-2">Semester {{ $i }}</h3>
                @if($matkuls->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">Mata Kuliah</th>
                                <th class="py-2 px-4 border-b">Kelas</th>
                                <th class="py-2 px-4 border-b">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matkuls as $idx => $mk)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $idx+1 }}</td>
                                <td class="py-2 px-4 border-b">{{ $mk->mata_kuliah }}</td>
                                <td class="py-2 px-4 border-b">{{ $mk->kelas }}</td>
                                <td class="py-2 px-4 border-b">{{ $mk->nilai_akhir }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-gray-500 italic">Belum ada matakuliah</div>
                @endif
            </div>
        @endfor
    </div>
    @else
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <div class="text-center py-8">
            <div class="text-red-500 font-bold text-xl mb-2">Data Praja Tidak Ditemukan</div>
            <p class="text-gray-600">Silakan hubungi administrator untuk informasi lebih lanjut.</p>
        </div>
    </div>
    @endif
</div>
@endsection 
