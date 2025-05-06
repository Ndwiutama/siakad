@extends('praja.layout')
@section('title', 'Profil Praja')
@section('content')

<!-- Pop-up Notification -->
@if(session('success') || session('error'))
<div id="notification" class="fixed top-20 right-4 z-50 max-w-sm">
    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md flex justify-between items-center">
        <div>
            <p class="font-bold">Berhasil!</p>
            <p>{{ session('success') }}</p>
        </div>
        <button onclick="closeNotification()" class="text-green-700">
            <i class="fa fa-times"></i>
        </button>
    </div>
    @endif
    
    @if(session('error'))
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-md flex justify-between items-center">
        <div>
            <p class="font-bold">Error!</p>
            <p>{{ session('error') }}</p>
        </div>
        <button onclick="closeNotification()" class="text-red-700">
            <i class="fa fa-times"></i>
        </button>
    </div>
    @endif
</div>

<script>
    // Auto close notification after 5 seconds
    setTimeout(function() {
        var notification = document.getElementById('notification');
        if (notification) {
            notification.style.display = 'none';
        }
    }, 5000);
    
    function closeNotification() {
        document.getElementById('notification').style.display = 'none';
    }
</script>
@endif

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
            <div class="flex justify-between items-center mb-4">
                <div class="font-semibold text-blue-900 text-base">DATA DIRI</div>
                <a href="{{ route('praja.reset-password-form') }}" class="bg-blue-900 text-white text-xs px-3 py-1 rounded hover:bg-blue-700">
                    Reset Password
                </a>
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

<!-- Form reset password -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
    <h3 class="font-semibold text-blue-900 text-base mb-4">Pengaturan Password</h3>
    
    <div class="flex flex-col md:flex-row md:items-center gap-4">
        <a href="{{ route('praja.reset-password-form') }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 flex items-center gap-2 inline-block">
            <i class="fa fa-refresh"></i> Reset Password
        </a>
        
        <a href="{{ route('praja.change-password-form') }}" class="bg-blue-700 text-white px-4 py-2 rounded shadow hover:bg-blue-800 flex items-center gap-2 inline-block">
            <i class="fa fa-key"></i> Ubah Password
        </a>
    </div>
    
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="bg-red-100 text-red-700 p-2 rounded mt-4">
            {{ session('error') }}
        </div>
    @endif
</div>

@endsection 









