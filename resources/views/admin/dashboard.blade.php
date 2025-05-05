@extends('admin.layout')
@section('title', 'Dashboard Admin')
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
            <i class="fa fa-users-cog text-3xl text-blue-700 mb-2"></i>
            <div class="text-lg font-semibold">Total User</div>
            <div class="text-3xl font-bold text-blue-900">{{ $totalUsers }}</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
            <i class="fa fa-chalkboard-teacher text-3xl text-blue-700 mb-2"></i>
            <div class="text-lg font-semibold">Total Dosen</div>
            <div class="text-3xl font-bold text-blue-900">{{ $totalDosen }}</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
            <i class="fa fa-user-graduate text-3xl text-blue-700 mb-2"></i>
            <div class="text-lg font-semibold">Total Praja</div>
            <div class="text-3xl font-bold text-blue-900">{{ $totalPraja }}</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Manajemen User</h2>
            <p class="text-gray-600 mb-4">Kelola akun admin, dosen, dan praja</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Kelola →</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Manajemen Mata Kuliah</h2>
            <p class="text-gray-600 mb-4">Kelola mata kuliah dan jadwal</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Kelola →</a>
        </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Laporan Akademik</h2>
        <p class="text-gray-600 mb-4">Lihat dan unduh laporan akademik</p>
        <a href="#" class="text-blue-600 hover:text-blue-800">Lihat →</a>
    </div>
</div>
@endsection 