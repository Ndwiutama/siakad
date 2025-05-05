@extends('admin.layout')
@section('title', 'Manajemen User')
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Manajemen User</h1>
        <button class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            <i class="fas fa-plus mr-2"></i>Tambah User
        </button>
    </div>

    <!-- Filter dan Pencarian -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input type="text" placeholder="Cari user..." class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="flex gap-4">
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Role</option>
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="praja">Praja</option>
                </select>
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabel User -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Username</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">Admin Utama</td>
                    <td class="px-6 py-4">admin@ipdn.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Admin</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-key"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Dr. John Doe</td>
                    <td class="px-6 py-4">john.doe@ipdn.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Dosen</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-key"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Ahmad Fadillah</td>
                    <td class="px-6 py-4">2023001@ipdn.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Praja</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-800">
                                <i class="fas fa-key"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection