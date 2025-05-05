@extends('dosen.layout')
@section('title', 'Elearning')
@section('content')
<div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md border-2 border-blue-400 p-6">
    <div class="mb-6">
        <span class="text-blue-900 font-bold text-lg">E-Learning Institut Pemerintahan Dalam Negeri</span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Fakultas Politik Pemerintahan -->
        <div class="bg-white rounded-lg shadow p-4 border flex flex-col gap-2">
            <div class="flex items-center gap-2 mb-2">
                <i class="fa fa-university text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Fakultas Politik Pemerintahan</span>
            </div>
            <div class="text-sm text-gray-700 mb-1">Program studi di bawah FPP:</div>
            <ul class="list-disc list-inside text-sm text-gray-700">
                <li>Politik Indonesia Terapan</li>
                <li>Kebijakan Publik</li>
                <li>Pembangunan dan Pemerintahan</li>
            </ul>
        </div>
        <!-- Fakultas Manajemen Pemerintahan -->
        <div class="bg-white rounded-lg shadow p-4 border flex flex-col gap-2">
            <div class="flex items-center gap-2 mb-2">
                <i class="fa fa-users-cog text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Fakultas Manajemen Pemerintahan</span>
            </div>
            <div class="text-sm text-gray-700 mb-1">Program studi di bawah FMP:</div>
            <ul class="list-disc list-inside text-sm text-gray-700">
                <li>Manajemen Sumber Daya Aparatur</li>
                <li>Manajemen Publik</li>
                <li>Administrasi Kependudukan dan Catatan Sipil</li>
            </ul>
        </div>
        <!-- Program Pascasarjana -->
        <div class="bg-white rounded-lg shadow p-4 border flex flex-col gap-2">
            <div class="flex items-center gap-2 mb-2">
                <i class="fa fa-graduation-cap text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Program Pascasarjana</span>
            </div>
            <div class="text-sm text-gray-700 mb-1">Program Pascasarjana:</div>
            <ul class="list-disc list-inside text-sm text-gray-700">
                <li>Program Magister (S2) Ilmu Pemerintahan</li>
                <li>Program Doktoral (S3) Ilmu Pemerintahan</li>
            </ul>
        </div>
    </div>
</div>
@endsection 