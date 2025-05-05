@extends('dosen.layout')
@section('title', 'Edit Jadwal Mata Kuliah')
@section('content')
<div class="max-w-lg mx-auto mt-8">
    <h1 class="text-2xl font-bold text-blue-900 mb-4">Edit Jadwal Mata Kuliah</h1>
    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('dosen.jadwal-matkul.update', $jadwalMatkul->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="block mb-1 font-semibold">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="w-full border rounded px-3 py-2" required value="{{ old('mata_kuliah', $jadwalMatkul->mata_kuliah) }}">
                @error('mata_kuliah')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="block mb-1 font-semibold">Kelas</label>
                <input type="text" name="kelas" class="w-full border rounded px-3 py-2" value="{{ old('kelas', $jadwalMatkul->kelas) }}">
            </div>
            <div class="mb-3">
                <label class="block mb-1 font-semibold">Hari</label>
                <select name="hari" class="w-full border rounded px-3 py-2" required>
                    <option value="">Pilih Hari</option>
                    @foreach(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $hari)
                        <option value="{{ $hari }}" {{ old('hari', $jadwalMatkul->hari) == $hari ? 'selected' : '' }}>{{ $hari }}</option>
                    @endforeach
                </select>
                @error('hari')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3 flex gap-2">
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Jam Mulai</label>
                    <input type="time" name="jam_mulai" class="w-full border rounded px-3 py-2" required value="{{ old('jam_mulai', $jadwalMatkul->jam_mulai) }}">
                    @error('jam_mulai')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
                </div>
                <div class="flex-1">
                    <label class="block mb-1 font-semibold">Jam Selesai</label>
                    <input type="time" name="jam_selesai" class="w-full border rounded px-3 py-2" required value="{{ old('jam_selesai', $jadwalMatkul->jam_selesai) }}">
                    @error('jam_selesai')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="block mb-1 font-semibold">Semester</label>
                <input type="number" name="semester" class="w-full border rounded px-3 py-2" required min="1" max="8" value="{{ old('semester', $jadwalMatkul->semester) }}">
                @error('semester')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="block mb-1 font-semibold">Ruang</label>
                <input type="text" name="ruang" class="w-full border rounded px-3 py-2" value="{{ old('ruang', $jadwalMatkul->ruang) }}">
            </div>
            <div class="flex justify-end gap-2 mt-4">
                <a href="{{ route('dosen.jadwal-matkul.index') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection 