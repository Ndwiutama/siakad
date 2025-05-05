@extends('admin.layout')
@section('title', 'Tambah User')
@section('content')
<div class="ml-72 max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <h1 class="text-xl font-semibold text-gray-800">
                <i class="fas fa-user-plus mr-2"></i>Tambah User Baru
            </h1>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" 
                               id="name" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required
                               placeholder="Masukkan nama lengkap">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">
                            Username <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('username') border-red-500 @enderror" 
                               id="username" 
                               name="username" 
                               value="{{ old('username') }}" 
                               required
                               placeholder="Masukkan username">
                        @error('username')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required
                               placeholder="contoh@email.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" 
                               id="password" 
                               name="password" 
                               required
                               placeholder="Masukkan password">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700 mb-1">
                            Role <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('role') border-red-500 @enderror" 
                                id="role" 
                                name="role" 
                                required>
                            <option value="">Pilih Role</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : (request('role') == 'admin' ? 'selected' : '') }}>Admin</option>
                            <option value="dosen" {{ old('role') == 'dosen' ? 'selected' : (request('role') == 'dosen' ? 'selected' : '') }}>Dosen</option>
                            <option value="praja" {{ old('role') == 'praja' ? 'selected' : (request('role') == 'praja' ? 'selected' : '') }}>Praja</option>
                        </select>
                        @error('role')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- NIP (khusus dosen) -->
                    <div id="nipField" style="display: none;">
                        <label for="nip" class="block text-sm font-medium text-gray-700 mb-1">
                            NIP
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nip') border-red-500 @enderror" 
                               id="nip" 
                               name="nip" 
                               value="{{ old('nip') }}"
                               placeholder="Masukkan NIP dosen">
                        @error('nip')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jabatan (khusus dosen) -->
                    <div id="jabatanField" style="display: none;">
                        <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">
                            Jabatan
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('jabatan') border-red-500 @enderror" 
                               id="jabatan" 
                               name="jabatan" 
                               value="{{ old('jabatan') }}"
                               placeholder="Masukkan jabatan dosen">
                        @error('jabatan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Program Studi (khusus dosen) -->
                    <div id="prodiField" style="display: none;">
                        <label for="program_studi" class="block text-sm font-medium text-gray-700 mb-1">
                            Program Studi
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('program_studi') border-red-500 @enderror" 
                               id="program_studi" 
                               name="program_studi" 
                               value="{{ old('program_studi') }}"
                               placeholder="Masukkan program studi dosen">
                        @error('program_studi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- NPP (khusus praja) -->
                    <div id="nppField" style="display: none;">
                        <label for="npp" class="block text-sm font-medium text-gray-700 mb-1">
                            NPP <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('npp') border-red-500 @enderror" 
                               id="npp" 
                               name="npp" 
                               value="{{ old('npp') }}"
                               placeholder="Masukkan NPP praja">
                        @error('npp')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Angkatan (khusus praja) -->
                    <div id="angkatanField" style="display: none;">
                        <label for="angkatan" class="block text-sm font-medium text-gray-700 mb-1">
                            Angkatan <span class="text-red-500">*</span>
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('angkatan') border-red-500 @enderror" 
                               id="angkatan" 
                               name="angkatan" 
                               value="{{ old('angkatan') }}"
                               placeholder="Masukkan angkatan">
                        @error('angkatan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Program Studi Praja -->
                    <div id="prodiPrajaField" style="display: none;">
                        <label for="program_studi_praja" class="block text-sm font-medium text-gray-700 mb-1">
                            Program Studi <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('program_studi_praja') border-red-500 @enderror" 
                               id="program_studi_praja" 
                               name="program_studi_praja" 
                               value="{{ old('program_studi_praja') }}"
                               placeholder="Masukkan program studi">
                        @error('program_studi_praja')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tingkat/Semester (khusus praja) -->
                    <div id="tingkatField" style="display: none;">
                        <label for="tingkat" class="block text-sm font-medium text-gray-700 mb-1">
                            Tingkat/Semester <span class="text-red-500">*</span>
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('tingkat') border-red-500 @enderror" 
                               id="tingkat" 
                               name="tingkat" 
                               value="{{ old('tingkat') }}"
                               placeholder="Masukkan tingkat/semester">
                        @error('tingkat')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Wisma (khusus praja) -->
                    <div id="wismaField" style="display: none;">
                        <label for="wisma" class="block text-sm font-medium text-gray-700 mb-1">
                            Wisma <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('wisma') border-red-500 @enderror" 
                               id="wisma" 
                               name="wisma" 
                               value="{{ old('wisma') }}"
                               placeholder="Masukkan wisma"
                               required>
                        @error('wisma')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('status') border-red-500 @enderror" 
                                id="status" 
                                name="status" 
                                required>
                            <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Non Aktif</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Tombol -->
                <div class="flex justify-end gap-4 mt-6 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.users.index') }}" 
                       class="px-6 py-2.5 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200">
                        <i class="fas fa-times mr-2"></i>Batal
                    </a>
                    <button type="submit" 
                            class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function toggleFields() {
        var role = document.getElementById('role').value;
        
        // Toggle fields untuk dosen
        var showDosen = role === 'dosen';
        document.getElementById('nipField').style.display = showDosen ? '' : 'none';
        document.getElementById('jabatanField').style.display = showDosen ? '' : 'none';
        document.getElementById('prodiField').style.display = showDosen ? '' : 'none';

        // Toggle fields untuk praja
        var showPraja = role === 'praja';
        document.getElementById('nppField').style.display = showPraja ? '' : 'none';
        document.getElementById('angkatanField').style.display = showPraja ? '' : 'none';
        document.getElementById('prodiPrajaField').style.display = showPraja ? '' : 'none';
        document.getElementById('tingkatField').style.display = showPraja ? '' : 'none';
        document.getElementById('wismaField').style.display = showPraja ? '' : 'none';

        // Set required attribute pada field wisma
        var wismaInput = document.getElementById('wisma');
        if (wismaInput) {
            wismaInput.required = showPraja;
        }
    }
    document.getElementById('role').addEventListener('change', toggleFields);
    window.onload = toggleFields;
</script>
@endpush 