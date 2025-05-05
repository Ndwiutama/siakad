@extends('praja.layout')
@section('title', 'Profil Praja')
@section('content')
<div class="max-w-5xl mx-auto flex flex-col gap-6">
    <!-- Box Nama -->
    <div class="bg-white rounded-lg shadow p-4 flex items-center gap-4 mb-2">
        <i class="fa fa-user-circle text-3xl text-gray-500"></i>
        <div>
            <div class="font-semibold text-lg">Nama Praja</div>
            <div class="text-gray-500 text-sm">NPP</div>
        </div>
    </div>
    <!-- Box Data -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Data Diri -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col gap-2 border border-gray-300 col-span-1">
            <div class="flex items-center justify-between mb-2">
                <div class="font-bold text-lg">DATA DIRI</div>
                <button class="bg-blue-900 text-white text-xs px-3 py-1 rounded hover:bg-blue-700">Reset Password</button>
            </div>
            <div class="flex items-center gap-3 mb-2">
                <i class="fa fa-user-circle text-5xl text-gray-400"></i>
            </div>
            <div class="grid grid-cols-2 gap-x-2 gap-y-1 text-sm">
                <div>Nama lengkap</div><div>: Nama lengkap</div>
                <div>Jenis kelamin</div><div>: Jenis kelamin</div>
                <div>Tempat, Tanggal Lahir</div><div>: Tempat, Tanggal Lahir</div>
                <div>Agama</div><div>: Agama</div>
                <div>Asdaf</div><div>: Asdaf</div>
                <div>Wisma</div><div>: Wisma</div>
                <div>Nomor Induk Kependudukan (NIK)</div><div>: Nomor Induk Kependudukan (NIK)</div>
                <div>Nomor Kartu Keluarga</div><div>: Nomor Kartu Keluarga</div>
                <div>Kewarganegaraan</div><div>: Kewarganegaraan</div>
                <div>Asal Sekolah</div><div>: Asal Sekolah</div>
                <div>Nomor Handphone</div><div>: Nomor Handphone</div>
                <div>Email</div><div>: Email</div>
            </div>
        </div>
        <!-- Data Akademik -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col gap-2 border border-gray-300 col-span-1">
            <div class="font-bold text-lg mb-2">Data Akademik</div>
            <div class="grid grid-cols-1 gap-y-1 text-sm">
                <div class="flex justify-between"><span>Nomor Pokok Praja</span><span>: Nomor Pokok Praja</span></div>
                <div class="flex justify-between"><span>Program Studi</span><span>: Program Studi</span></div>
                <div class="flex justify-between"><span>Priode Masuk</span><span>: Priode Masuk</span></div>
                <div class="flex justify-between"><span>Tingkatan</span><span>: Tingkatan</span></div>
                <div class="flex justify-between"><span>Dosen Wali</span><span>: Dosen Wali</span></div>
                <div class="flex justify-between"><span>Semester</span><span>: Semester</span></div>
            </div>
        </div>
        <!-- Alamat -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col gap-2 border border-gray-300 col-span-1">
            <div class="font-bold text-lg mb-2">Alamat</div>
            <div class="grid grid-cols-1 gap-y-1 text-sm">
                <div class="flex justify-between"><span>Alamat Tempat Tinggal</span><span>: Alamat Tempat Tinggal</span></div>
                <div class="flex justify-between"><span>Desa/Kelurahan</span><span>: Desa/Kelurahan</span></div>
                <div class="flex justify-between"><span>Kecamatan</span><span>: Kecamatan</span></div>
                <div class="flex justify-between"><span>Kabupaten</span><span>: Kabupaten</span></div>
                <div class="flex justify-between"><span>Provinsi</span><span>: Provinsi</span></div>
                <div class="flex justify-between"><span>Kode Pos</span><span>: Kode Pos</span></div>
            </div>
        </div>
    </div>
</div>
@endsection 