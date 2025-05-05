@extends('dosen.layout')
@section('title', 'Jadwal Mata Kuliah')
@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-blue-900">Jadwal Mengajar</h1>
        <a href="{{ route('dosen.jadwal-matkul.create') }}" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">
            <i class="fa fa-plus"></i> Tambah Jadwal
        </a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
    @endif
    <div class="bg-white rounded shadow p-4">
        <table class="min-w-full text-sm">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-2 py-1">Mata Kuliah</th>
                    <th class="px-2 py-1">Kelas</th>
                    <th class="px-2 py-1">Hari</th>
                    <th class="px-2 py-1">Jam</th>
                    <th class="px-2 py-1">Semester</th>
                    <th class="px-2 py-1">Ruang</th>
                    <th class="px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwals as $jadwal)
                <tr>
                    <td class="px-2 py-1">{{ $jadwal->mata_kuliah }}</td>
                    <td class="px-2 py-1">{{ $jadwal->kelas }}</td>
                    <td class="px-2 py-1">{{ $jadwal->hari }}</td>
                    <td class="px-2 py-1">{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
                    <td class="px-2 py-1">{{ $jadwal->semester }}</td>
                    <td class="px-2 py-1">{{ $jadwal->ruang }}</td>
                    <td class="px-2 py-1">
                        <a href="{{ route('dosen.jadwal-matkul.show', $jadwal->id) }}" class="text-blue-600 hover:underline mr-2"><i class="fa fa-eye"></i> Detail</a>
                        <a href="{{ route('dosen.jadwal-matkul.edit', $jadwal->id) }}" class="text-blue-600 hover:underline mr-2"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('dosen.jadwal-matkul.destroy', $jadwal->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus jadwal?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" class="text-center text-gray-400 py-4">Belum ada jadwal</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 