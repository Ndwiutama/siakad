@extends('admin.layout')
@section('title', 'Manajemen User')
@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white rounded-lg shadow p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">
                <i class="fas fa-users mr-2"></i>Manajemen User
            </h1>
            <a href="{{ route('admin.users.create') }}" 
               class="bg-blue-500 text-white px-4 py-2 rounded">
                <i class="fas fa-plus"></i> Tambah User
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search & Filter -->
        <div class="mb-4">
            <input type="text" 
                   id="searchInput" 
                   placeholder="Cari user..." 
                   class="w-full p-2 border rounded mb-2">
            <div class="flex gap-2">
                <select id="roleFilter" class="p-2 border rounded">
                    <option value="">Semua Role</option>
                    <option value="admin">Admin</option>
                    <option value="dosen">Dosen</option>
                    <option value="praja">Praja</option>
                </select>
                <select id="statusFilter" class="p-2 border rounded">
                    <option value="">Semua Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 text-left">Nama</th>
                        <th class="p-2 text-left">Username</th>
                        <th class="p-2 text-left">Email</th>
                        <th class="p-2 text-left">Role</th>
                        <th class="p-2 text-left">Status</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="border-t">
                        <td class="p-2">{{ $user->name }}</td>
                        <td class="p-2">{{ $user->username }}</td>
                        <td class="p-2">{{ $user->email }}</td>
                        <td class="p-2">
                            <span class="px-2 py-1 rounded text-sm
                                {{ $user->role === 'admin' ? 'bg-red-100' : 
                                   ($user->role === 'dosen' ? 'bg-blue-100' : 'bg-green-100') }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="p-2">
                            <span class="px-2 py-1 rounded text-sm
                                {{ $user->status === 'aktif' ? 'bg-green-100' : 'bg-gray-100' }}">
                                {{ ucfirst($user->status) }}
                            </span>
                        </td>
                        <td class="p-2">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.users.edit', $user->id) }}" 
                                   class="text-yellow-600">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Yakin ingin menghapus?')" 
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">
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
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const roleFilter = document.getElementById('roleFilter');
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('tbody tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedRole = roleFilter.value.toLowerCase();
        const selectedStatus = statusFilter.value.toLowerCase();

        tableRows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            const username = row.cells[1].textContent.toLowerCase();
            const email = row.cells[2].textContent.toLowerCase();
            const role = row.cells[3].textContent.toLowerCase();
            const status = row.cells[4].textContent.toLowerCase();

            const matchesSearch = name.includes(searchTerm) || 
                                username.includes(searchTerm) || 
                                email.includes(searchTerm);
            const matchesRole = selectedRole === '' || role.includes(selectedRole);
            const matchesStatus = selectedStatus === '' || status.includes(selectedStatus);

            row.style.display = matchesSearch && matchesRole && matchesStatus ? '' : 'none';
        });
    }

    searchInput.addEventListener('input', filterTable);
    roleFilter.addEventListener('change', filterTable);
    statusFilter.addEventListener('change', filterTable);
});
</script>
@endpush
@endsection