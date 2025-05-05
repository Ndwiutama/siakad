@extends('praja.layout')
@section('title', 'Jadwal')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="bg-white rounded-lg shadow-md p-4 mb-6 border">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
            <div class="font-semibold text-blue-900 text-base mb-2 md:mb-0">Jadwal Kuliah Praja</div>
            <div class="flex gap-3">
                <a href="#" class="bg-green-400 hover:bg-green-500 text-white font-semibold px-5 py-1.5 rounded-full shadow border border-green-600 transition">Cetak Jadwal</a>
                <span class="bg-green-400 text-white font-semibold px-5 py-1.5 rounded-full shadow border border-green-600">Status Ujian Dibuka</span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-2 py-1">No</th>
                        <th class="border px-2 py-1">Mata Kuliah</th>
                        <th class="border px-2 py-1">Kelas</th>
                        <th class="border px-2 py-1">Dosen Pengampu</th>
                        <th class="border px-2 py-1">Hari</th>
                        <th class="border px-2 py-1">Waktu</th>
                        <th class="border px-2 py-1">Ruangan</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jadwals as $index => $jadwal)
                    <tr>
                        <td class="border px-2 py-1">{{ $index + 1 }}</td>
                        <td class="border px-2 py-1 text-left">{{ $jadwal->mata_kuliah }}</td>
                        <td class="border px-2 py-1">{{ $jadwal->kelas }}</td>
                        <td class="border px-2 py-1">{{ $jadwal->dosen->name ?? '-' }}</td>
                        <td class="border px-2 py-1">{{ $jadwal->hari }}</td>
                        <td class="border px-2 py-1">{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
                        <td class="border px-2 py-1">{{ $jadwal->ruang }}</td>
                        <td class="border px-2 py-1">
                            <button class="text-gray-600 hover:text-blue-600"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="border px-2 py-4 text-center text-gray-500">Belum ada jadwal tersedia</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 