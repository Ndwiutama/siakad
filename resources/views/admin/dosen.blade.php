@extends('admin.layout')
@section('title', 'Manajemen Dosen')
@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white rounded-lg shadow p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">
                <i class="fas fa-chalkboard-teacher mr-2"></i>Manajemen Dosen
            </h1>
            <a href="{{ route('admin.users.create') }}?role=dosen" class="bg-blue-500 text-white px-4 py-2 rounded">
                <i class="fas fa-plus"></i> Tambah Dosen
            </a>
        </div>

        <!-- Search & Filter -->
        <div class="mb-4">
            <input type="text" id="searchInput" placeholder="Cari dosen..." class="w-full p-2 border rounded mb-2">
            <div class="flex gap-2">
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
                        <th class="p-2 text-left">NIP</th>
                        <th class="p-2 text-left">Jabatan</th>
                        <th class="p-2 text-left">Program Studi</th>
                        <th class="p-2 text-left">Status</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dosens as $dosen)
                    <tr class="border-t">
                        <td class="p-2">{{ $dosen->name }}</td>
                        <td class="p-2">{{ $dosen->nip }}</td>
                        <td class="p-2">{{ $dosen->jabatan }}</td>
                        <td class="p-2">{{ $dosen->program_studi }}</td>
                        <td class="p-2">
                            <span class="px-2 py-1 rounded text-sm {{ $dosen->status == 'aktif' ? 'bg-green-100' : 'bg-gray-100' }}">
                                {{ ucfirst($dosen->status) }}
                            </span>
                        </td>
                        <td class="p-2">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.users.edit', $dosen->id) }}" class="text-yellow-600">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $dosen->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
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
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('tbody tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value.toLowerCase();

        tableRows.forEach(row => {
            const nama = row.cells[0].textContent.toLowerCase();
            const status = row.cells[4].textContent.toLowerCase();

            const matchesSearch = nama.includes(searchTerm);
            const matchesStatus = selectedStatus === '' || status.includes(selectedStatus);

            row.style.display = matchesSearch && matchesStatus ? '' : 'none';
        });
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
});
</script>
@endpush
@endsection