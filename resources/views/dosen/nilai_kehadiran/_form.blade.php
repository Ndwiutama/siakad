<div class="grid grid-cols-1 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Praja</label>
        <select name="praja_id" class="w-full border rounded px-3 py-2" required>
            <option value="">Pilih Praja</option>
            @foreach($prajas as $praja)
                <option value="{{ $praja->id }}" {{ (old('praja_id', $nilaiKehadiran->praja_id ?? '') == $praja->id) ? 'selected' : '' }}>
                    {{ $praja->user->name ?? '-' }} ({{ $praja->npp }})
                </option>
            @endforeach
        </select>
        @error('praja_id')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Semester</label>
        <input type="text" name="semester" class="w-full border rounded px-3 py-2" value="{{ old('semester', $nilaiKehadiran->semester ?? '') }}" required>
        @error('semester')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Mata Kuliah</label>
        <input type="text" name="mata_kuliah" class="w-full border rounded px-3 py-2" value="{{ old('mata_kuliah', $nilaiKehadiran->mata_kuliah ?? '') }}" required>
        @error('mata_kuliah')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
        <input type="text" name="kelas" class="w-full border rounded px-3 py-2" value="{{ old('kelas', $nilaiKehadiran->kelas ?? '') }}">
        @error('kelas')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kehadiran</label>
            <input type="number" name="kehadiran" class="w-full border rounded px-3 py-2" value="{{ old('kehadiran', $nilaiKehadiran->kehadiran ?? '') }}">
            @error('kehadiran')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tugas</label>
            <input type="number" name="tugas" class="w-full border rounded px-3 py-2" value="{{ old('tugas', $nilaiKehadiran->tugas ?? '') }}">
            @error('tugas')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">UTS</label>
            <input type="number" name="uts" class="w-full border rounded px-3 py-2" value="{{ old('uts', $nilaiKehadiran->uts ?? '') }}">
            @error('uts')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">UAS</label>
            <input type="number" name="uas" class="w-full border rounded px-3 py-2" value="{{ old('uas', $nilaiKehadiran->uas ?? '') }}">
            @error('uas')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nilai Akhir</label>
            <input type="number" name="nilai_akhir" class="w-full border rounded px-3 py-2" value="{{ old('nilai_akhir', $nilaiKehadiran->nilai_akhir ?? '') }}">
            @error('nilai_akhir')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
    </div>
</div> 