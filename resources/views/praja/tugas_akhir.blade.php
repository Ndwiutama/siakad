@extends('praja.layout')
@section('title', 'Tugas Akhir')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <!-- Dosen Pembimbing -->
        <div class="bg-white rounded-lg shadow-md p-4 border">
            <div class="font-semibold text-blue-900 text-base mb-2">Dosen Pembimbing</div>
            <div class="text-sm mb-1"><span class="font-semibold">Nama Dosen 1</span> : Aria Jufar</div>
            <div class="text-sm mb-1"><span class="font-semibold">Nama Dosen 2</span> : Ryanto</div>
            <div class="text-sm mb-1"><span class="font-semibold">Status Pembimbing</span> : <span class="text-green-700 font-semibold">Aktif</span></div>
            <div class="text-sm"><span class="font-semibold">Catatan/Pesan Dosen</span> : Revisi Proposal Sudah sesuai</div>
        </div>
        <!-- Informasi Praja -->
        <div class="bg-white rounded-lg shadow-md p-4 border">
            <div class="font-semibold text-blue-900 text-base mb-2">Informasi Praja</div>
            <div class="text-sm mb-1"><span class="font-semibold">Nama</span> : Nuriawan Dwi Utami Pangestu Praja</div>
            <div class="text-sm mb-1"><span class="font-semibold">Npp</span> : 17224005</div>
            <div class="text-sm mb-1"><span class="font-semibold">Program Studi</span> : Politik Pemerintahan</div>
            <div class="text-sm"><span class="font-semibold">Semester</span> : 8</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <!-- Data Tugas Akhir -->
        <div class="bg-white rounded-lg shadow-md p-4 border">
            <div class="font-semibold text-blue-900 text-base mb-2">Data Tugas Akhir</div>
            <div class="text-sm mb-1"><span class="font-semibold">Jenis TA</span> : Skripsi</div>
            <div class="text-sm mb-1"><span class="font-semibold">Status</span> : Dalam Proses</div>
            <div class="text-sm flex items-center gap-2">
                <span class="font-semibold">File Tugas Akhir</span> : Laporan
                <span class="inline-block w-4 h-4 rounded-full bg-green-500 border border-gray-300"></span>
            </div>
        </div>
        <!-- Judul Tugas Akhir -->
        <div class="bg-white rounded-lg shadow-md p-4 border">
            <div class="font-semibold text-blue-900 text-base mb-2">Judul Tugas Akhir</div>
            <div class="text-sm mb-1"><span class="font-semibold">Judul</span> : Pengembangan IOT</div>
            <div class="text-sm mb-1"><span class="font-semibold">Tanggal Pengajuan</span> : 22 - April - 2025</div>
            <div class="text-sm flex items-center gap-2">
                <span class="font-semibold">Status Judul</span> : Disetujui
                <span class="inline-block w-4 h-4 rounded-full bg-green-500 border border-gray-300"></span>
            </div>
        </div>
    </div>
    <!-- Nilai IPK -->
    <div class="bg-white rounded-lg shadow-md p-4 border mb-8 max-w-xs">
        <div class="font-semibold text-blue-900 text-base mb-2">Nilai IPK</div>
        <div class="text-sm"><span class="font-semibold">Total IPK</span> : 3,45</div>
    </div>
    
@endsection 