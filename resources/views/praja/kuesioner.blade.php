@extends('praja.layout')
@section('title', 'Kuesioner Praja')
@section('content')
<div class="max-w-4xl mx-auto mt-8" x-data="{ tab: 'evadom' }">
    <div class="bg-white rounded-xl shadow p-6 mb-6 border">
        <div class="font-bold text-blue-900 text-lg mb-4">Kuesioner</div>
        <!-- Tabs -->
        <div class="flex gap-2 mb-4">
            <button @click="tab = 'evadom'" :class="tab === 'evadom' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 focus:outline-none transition">
                <i class="fa fa-clipboard-check"></i> Evadom
            </button>
            <button @click="tab = 'layanan'" :class="tab === 'layanan' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 focus:outline-none transition">
                <i class="fa fa-hand-holding-heart"></i> Layanan
            </button>
            <button @click="tab = 'kritik'" :class="tab === 'kritik' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-full font-semibold shadow border border-blue-900 flex items-center gap-2 focus:outline-none transition">
                <i class="fa fa-lightbulb"></i> Kritik & Saran
            </button>
        </div>
        <!-- Dropdown Periode -->
        <select class="border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 mb-4">
            <option>2024/2025 Genap</option>
        </select>
        <!-- Tabel Kuesioner Evadom -->
        <div x-show="tab === 'evadom'" class="overflow-x-auto">
            <table class="w-full text-sm text-center border border-gray-300 rounded">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border px-2 py-1">Mata Kuliah</th>
                        <th class="border px-2 py-1">Dosen</th>
                        <th class="border px-2 py-1">Jadwal Pengisian</th>
                        <th class="border px-2 py-1">Status</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1,4) as $i)
                    <tr class="{{ $i % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-2 py-1">B.10{{ $i }}</td>
                        <td class="border px-2 py-1">Dosen Mata Kuliah {{ $i }}</td>
                        <td class="border px-2 py-1">xx April 2025 - xx Agustus 2025</td>
                        <td class="border px-2 py-1">
                            @if($i % 2 == 0)
                                <span class="inline-block w-4 h-4 rounded-full bg-green-500 border border-gray-300"></span>
                            @else
                                <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                            @endif
                        </td>
                        <td class="border px-2 py-1">
                            @if($i % 2 != 0)
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Tabel Kuesioner Layanan -->
        <div x-show="tab === 'layanan'" class="overflow-x-auto">
            <table class="w-full text-sm text-center border border-gray-300 rounded">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border px-2 py-1">Layanan</th>
                        <th class="border px-2 py-1">Petugas</th>
                        <th class="border px-2 py-1">Jadwal Pengisian</th>
                        <th class="border px-2 py-1">Status</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1,3) as $i)
                    <tr class="{{ $i % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-2 py-1">Layanan Akademik {{ $i }}</td>
                        <td class="border px-2 py-1">Petugas {{ $i }}</td>
                        <td class="border px-2 py-1">xx April 2025 - xx Agustus 2025</td>
                        <td class="border px-2 py-1">
                            @if($i % 2 == 0)
                                <span class="inline-block w-4 h-4 rounded-full bg-green-500 border border-gray-300"></span>
                            @else
                                <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                            @endif
                        </td>
                        <td class="border px-2 py-1">
                            @if($i % 2 != 0)
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Tabel Kuesioner Kritik & Saran -->
        <div x-show="tab === 'kritik'" class="overflow-x-auto">
            <table class="w-full text-sm text-center border border-gray-300 rounded">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border px-2 py-1">Topik</th>
                        <th class="border px-2 py-1">Tanggal</th>
                        <th class="border px-2 py-1">Status</th>
                        <th class="border px-2 py-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1,2) as $i)
                    <tr class="{{ $i % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-2 py-1">Kritik/Saran {{ $i }}</td>
                        <td class="border px-2 py-1">xx Mei 2025</td>
                        <td class="border px-2 py-1">
                            @if($i % 2 == 0)
                                <span class="inline-block w-4 h-4 rounded-full bg-green-500 border border-gray-300"></span>
                            @else
                                <span class="inline-block w-4 h-4 rounded-full bg-red-500 border border-gray-300"></span>
                            @endif
                        </td>
                        <td class="border px-2 py-1">
                            @if($i % 2 != 0)
                            <button class="bg-white border border-gray-400 rounded px-3 py-1 text-sm font-semibold flex items-center gap-1 hover:bg-gray-100">
                                <i class="fa fa-edit"></i> Jawab
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Alpine.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection