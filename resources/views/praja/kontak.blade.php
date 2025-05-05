@extends('praja.layout')
@section('title', 'Kontak')
@section('content')
<div class="max-w-5xl mx-auto mt-6">
    <div class="mb-4">
        <span class="text-blue-900 font-bold text-lg">Kontak dan Bantuan</span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Kontak Akademik -->
        <div class="bg-white rounded-lg shadow-md p-5 border flex flex-col gap-3">
            <div class="font-semibold text-blue-900 text-lg mb-2">Kontak Akademik</div>
            <div class="flex items-start gap-3 mb-2">
                <i class="fa fa-location-dot text-xl text-gray-700 mt-1"></i>
                <div>
                    <span class="font-semibold">Lokasi:</span>
                    <div class="text-sm text-gray-700">
                        Jl. Ir. Soekarno KM.20, Desa Cibeusi,<br>
                        Kecamatan Jatinangor, Kabupaten<br>
                        Sumedang, Jawa Barat 45363
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-3 mb-2">
                <i class="fa fa-envelope text-xl text-gray-700"></i>
                <div>
                    <span class="font-semibold">Email:</span>
                    <div class="text-sm text-gray-700">Akademis@gmail.com</div>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <i class="fa fa-phone text-xl text-gray-700"></i>
                <div>
                    <span class="font-semibold">Telepon:</span>
                    <div class="text-sm text-gray-700">xxxxxxxxxxxx</div>
                </div>
            </div>
        </div>
        <!-- Form Kontak -->
        <div class="bg-white rounded-lg shadow-md p-5 border">
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nama :</label>
                        <input type="text" class="w-full border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email :</label>
                        <input type="email" class="w-full border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Email Anda">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-semibold mb-1">Subjek :</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Subjek Pesan">
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-semibold mb-1">Pesan :</label>
                    <textarea rows="5" class="w-full border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Tulis pesan Anda di sini"></textarea>
                </div>
                <button type="submit" class="bg-blue-900 text-white px-5 py-2 rounded font-semibold hover:bg-blue-700 transition">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection 