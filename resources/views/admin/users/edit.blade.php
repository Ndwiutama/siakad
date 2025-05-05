@extends('admin.layout')
@section('title', 'Edit User')
@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white rounded-lg shadow p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">
                <i class="fas fa-user-edit mr-2"></i>Edit User
            </h1>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Nama Lengkap -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-1">Nama Lengkap</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('name') border-red-500 @enderror" 
                       id="name" 
                       name="name" 
                       value="{{ old('name', $user->name) }}" 
                       required>
                @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium mb-1">Username</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('username') border-red-500 @enderror" 
                       id="username" 
                       name="username" 
                       value="{{ old('username', $user->username) }}" 
                       required>
                @error('username')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input type="email" 
                       class="w-full p-2 border rounded @error('email') border-red-500 @enderror" 
                       id="email" 
                       name="email" 
                       value="{{ old('email', $user->email) }}" 
                       required>
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input type="password" 
                       class="w-full p-2 border rounded @error('password') border-red-500 @enderror" 
                       id="password" 
                       name="password">
                <p class="text-xs text-gray-500">Kosongkan jika tidak ingin mengubah password</p>
                @error('password')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium mb-1">Role</label>
                <select class="w-full p-2 border rounded @error('role') border-red-500 @enderror" 
                        id="role" 
                        name="role" 
                        required>
                    <option value="">Pilih Role</option>
                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="dosen" {{ old('role', $user->role) == 'dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="praja" {{ old('role', $user->role) == 'praja' ? 'selected' : '' }}>Praja</option>
                </select>
                @error('role')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- NIP (khusus dosen) -->
            <div class="mb-4" id="nipField" style="display: none;">
                <label for="nip" class="block text-sm font-medium mb-1">NIP</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('nip') border-red-500 @enderror" 
                       id="nip" 
                       name="nip" 
                       value="{{ old('nip', $user->nip) }}">
                @error('nip')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jabatan (khusus dosen) -->
            <div class="mb-4" id="jabatanField" style="display: none;">
                <label for="jabatan" class="block text-sm font-medium mb-1">Jabatan</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('jabatan') border-red-500 @enderror" 
                       id="jabatan" 
                       name="jabatan" 
                       value="{{ old('jabatan', $user->jabatan) }}">
                @error('jabatan')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Program Studi (khusus dosen) -->
            <div class="mb-4" id="prodiField" style="display: none;">
                <label for="program_studi" class="block text-sm font-medium mb-1">Program Studi</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('program_studi') border-red-500 @enderror" 
                       id="program_studi" 
                       name="program_studi" 
                       value="{{ old('program_studi', $user->program_studi) }}">
                @error('program_studi')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Wisma (khusus praja) -->
            <div class="mb-4" id="wismaField" style="display: none;">
                <label for="wisma" class="block text-sm font-medium mb-1">Wisma</label>
                <input type="text" 
                       class="w-full p-2 border rounded @error('wisma') border-red-500 @enderror" 
                       id="wisma" 
                       name="wisma" 
                       value="{{ old('wisma', $user->wisma) }}">
                @error('wisma')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium mb-1">Status</label>
                <select class="w-full p-2 border rounded @error('status') border-red-500 @enderror" 
                        id="status" 
                        name="status" 
                        required>
                    <option value="aktif" {{ old('status', $user->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ old('status', $user->status) == 'nonaktif' ? 'selected' : '' }}>Non Aktif</option>
                </select>
                @error('status')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.users.index') }}" 
                   class="px-4 py-2 bg-gray-100 text-gray-700 rounded">
                    Batal
                </a>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-500 text-white rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function toggleFields() {
            var role = document.getElementById('role').value;
            var showDosen = role === 'dosen';
            var showPraja = role === 'praja';
            
            document.getElementById('nipField').style.display = showDosen ? '' : 'none';
            document.getElementById('jabatanField').style.display = showDosen ? '' : 'none';
            document.getElementById('prodiField').style.display = showDosen ? '' : 'none';
            document.getElementById('wismaField').style.display = showPraja ? '' : 'none';
        }
        document.getElementById('role').addEventListener('change', toggleFields);
        toggleFields();
    });
</script>
@endpush