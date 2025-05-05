@extends('admin.layout')
@section('title', 'Manajemen Praja')
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Manajemen Praja</h1>
        <a href="{{ route('admin.users.create', ['role' => 'praja']) }}" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            <i class="fas fa-plus mr-2"></i>Tambah Praja
        </a>
    </div>

    <!-- Filter dan Pencarian -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input type="text" placeholder="Cari praja..." class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div class="flex gap-4">
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Program Studi</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                </select>
                <select class="px-4 py-2 border rounded-lg">
                    <option value="">Semua Angkatan</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tabel Praja -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NPP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Program Studi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Angkatan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tingkat</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Wisma</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($prajas as $praja)
                <tr>
                    <td class="px-6 py-4">{{ $praja->npp }}</td>
                    <td class="px-6 py-4">{{ $praja->user->name }}</td>
                    <td class="px-6 py-4">{{ $praja->program_studi }}</td>
                    <td class="px-6 py-4">{{ $praja->angkatan }}</td>
                    <td class="px-6 py-4">{{ $praja->tingkat }}</td>
                    <td class="px-6 py-4">{{ $praja->wisma }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $praja->status === 'aktif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ ucfirst($praja->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.users.edit', $praja->user_id) }}" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.users.destroy', $praja->user_id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Apakah Anda yakin ingin menghapus praja ini?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Praja -->
    <div class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="modalTambah">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Tambah Praja Baru</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">NPP</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Program Studi</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option value="">Pilih Program Studi</option>
                            <option value="s1">S1 Ilmu Pemerintahan</option>
                            <option value="s2">S2 Ilmu Pemerintahan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Angkatan</label>
                        <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div class="flex justify-end gap-2">
                        <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection