@extends('dosen.layout')
@section('title', 'Nilai & Kehadiran Praja')
@section('content')
<div class="max-w-6xl mx-auto mt-8">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-900">Nilai & Kehadiran Praja</h1>
        <a href="{{ route('dosen.nilai-kehadiran.create') }}" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            <i class="fas fa-plus mr-2"></i>Tambah Data
        </a>
    </div>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NPP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Semester</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kehadiran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tugas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">UTS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">UAS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai Akhir</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($nilaiKehadiran as $nilai)
                <tr>
                    <td class="px-6 py-4">{{ $nilai->praja->npp ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $nilai->praja->user->name ?? '-' }}</td>
                    <td class="px-6 py-4">{{ $nilai->mata_kuliah }}</td>
                    <td class="px-6 py-4">{{ $nilai->semester }}</td>
                    <td class="px-6 py-4">{{ $nilai->kehadiran }}</td>
                    <td class="px-6 py-4">{{ $nilai->tugas }}</td>
                    <td class="px-6 py-4">{{ $nilai->uts }}</td>
                    <td class="px-6 py-4">{{ $nilai->uas }}</td>
                    <td class="px-6 py-4">{{ $nilai->nilai_akhir }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('dosen.nilai-kehadiran.show', $nilai->id) }}" class="text-blue-600 hover:text-blue-800">Detail</a>
                        <a href="{{ route('dosen.nilai-kehadiran.edit', $nilai->id) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                        <form action="{{ route('dosen.nilai-kehadiran.destroy', $nilai->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 