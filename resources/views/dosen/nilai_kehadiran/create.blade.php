@extends('dosen.layout')
@section('title', 'Tambah Nilai & Kehadiran')
@section('content')
<div class="max-w-2xl mx-auto mt-8">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Tambah Nilai & Kehadiran Praja</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('dosen.nilai-kehadiran.store') }}" method="POST">
            @csrf
            @include('dosen.nilai_kehadiran._form', ['nilaiKehadiran' => null, 'prajas' => $prajas])
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection 