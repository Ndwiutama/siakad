@extends('dosen.layout')
@section('title', 'Detail Nilai & Kehadiran')
@section('content')
<div class="max-w-2xl mx-auto mt-8">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Detail Nilai & Kehadiran Praja</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="mb-4"><strong>Nama Praja:</strong> {{ $nilaiKehadiran->praja->user->name ?? '-' }}</div>
        <div class="mb-2"><strong>NPP:</strong> {{ $nilaiKehadiran->praja->npp ?? '-' }}</div>
        <div class="mb-2"><strong>Mata Kuliah:</strong> {{ $nilaiKehadiran->mata_kuliah }}</div>
        <div class="mb-2"><strong>Semester:</strong> {{ $nilaiKehadiran->semester }}</div>
        <div class="mb-2"><strong>Kelas:</strong> {{ $nilaiKehadiran->kelas }}</div>
        <div class="mb-2"><strong>Kehadiran:</strong> {{ $nilaiKehadiran->kehadiran }}</div>
        <div class="mb-2"><strong>Tugas:</strong> {{ $nilaiKehadiran->tugas }}</div>
        <div class="mb-2"><strong>UTS:</strong> {{ $nilaiKehadiran->uts }}</div>
        <div class="mb-2"><strong>UAS:</strong> {{ $nilaiKehadiran->uas }}</div>
        <div class="mb-2"><strong>Nilai Akhir:</strong> {{ $nilaiKehadiran->nilai_akhir }}</div>
        <div class="mt-6">
            <a href="{{ route('dosen.nilai-kehadiran.index') }}" class="text-blue-700 hover:underline">&larr; Kembali ke daftar</a>
        </div>
    </div>
</div>
@endsection 