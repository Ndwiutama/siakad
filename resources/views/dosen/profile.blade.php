@extends('dosen.layout')
@section('title', 'Profil Dosen')
@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Profil Dosen</h1>
        <p class="text-gray-600">Kelola informasi profil Anda</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Foto Profil -->
        <div class="flex items-center gap-6 mb-8">
            <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center">
                <i class="fa fa-user text-4xl text-gray-400"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Dr. John Doe, M.Si</h2>
                <p class="text-gray-600">Dosen Fakultas Politik Pemerintahan</p>
                <p class="text-gray-600">NIDN: 1234567890</p>
            </div>
        </div>

        <!-- Informasi Pribadi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Pribadi</h3>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="mt-1">john.doe@ipdn.ac.id</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">No. Telepon</label>
                        <p class="mt-1">081234567890</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat</label>
                        <p class="mt-1">Jl. Raya IPDN No. 1, Jatinangor, Sumedang</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akademik</h3>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Program Studi</label>
                        <p class="mt-1">Politik Indonesia Terapan</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jabatan Fungsional</label>
                        <p class="mt-1">Lektor Kepala</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bidang Keahlian</label>
                        <p class="mt-1">Politik Lokal, Kebijakan Publik</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Edit -->
        <div class="mt-8 flex justify-end">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 flex items-center gap-2">
                <i class="fa fa-edit"></i>
                Edit Profil
            </button>
        </div>
    </div>
</div>
@endsection